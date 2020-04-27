<?php
namespace common\models;

use yii\db\ActiveRecord;

/**
 * Class Article
 * @package common\models
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $author
 * @property integer $status
 */
class Article extends ActiveRecord
{

}