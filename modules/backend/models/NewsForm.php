<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2016/12/8
 * Time: 15:54
 * Email:liyongsheng@meicai.cn
 */
namespace app\modules\backend\models;
use yii\base\Model;
use app\models\News;

class NewsForm extends Model
{

    public $title;
    public $description;
    public $status;
    public $detail;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'detail'], 'required'],
            [['status'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
        ];
    }



    public function create()
    {
        if($this->validate()){
            $news = new News();
            $news->title = $this->title;
            $news->description = $this->description;
            $news->status = $this->status;
            if($news->save()){

                $news->id;
            }
        }
    }
}