<?php
namespace App\Model\Table;

use Cake\Core\Configure;
use Cake\ORM\Table;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\ORM\TableRegistry;

class ArticlesTable extends Table
{
    public function getArt($pg = 1)
    {
        $builder = TableRegistry::getTableLocator()->get('Articles');
        $query = $builder->find();
        $columns = [
            'Articles.id',
            'articles_title' => 'Articles.title',
            'tag_name' => $query->func()->group_concat(['Tags.title' => 'identifier'])
        ];
        $query->select($columns);
        $query->join([
            'ArticlesTags' => [
                'table' => 'articles_tags',
                'type' => 'LEFT',
                'conditions' => 'ArticlesTags.article_id = Articles.id',
            ],
            'Tags' => [
                'table' => 'tags',
                'type' => 'INNER',
                'conditions' => 'ArticlesTags.tag_id = Tags.id',
            ]
        ]);
        $query->whereInList('Articles.id',Configure::read('TempArray'));
        $query->where(['Articles.is_deleted =' => Configure::read('NoDeletedFlag')]);
        $query->group(['Articles.id']);
        $query->limit(1);
        $query->page($pg);
        $result = $query->toList();

        return $result;
    }
}
