<?php
namespace Back\Model;
use Think\Model;

/**
 * Class TypeModel
 * 后台类型模型
 * @package Back\Model
 */
class TypeModel extends Model
{
    // 批量验证
    protected $patchValidate = true;

    // 验证规则
    protected $_validate = [
    ];

//    填充数据
    protected $_auto = [
    ];
}