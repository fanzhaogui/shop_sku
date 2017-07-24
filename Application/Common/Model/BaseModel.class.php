<?php 
namespace Common\Model;
use Think\Model;

/**
 * 基础模型 
 */
class BaseModel extends Model
{
	/**
	 * 获取单条数据
	 */
	public function getData($map, $fields = '*')
	{
		return $this->where($map)->field($fields)->find();
	}

	/**
	 * 获取所有数据
	 */
	public function getAllData($map, $fields = '*')
	{
		if ($map) {
			return $this->where($map)->field($fields)->select();
		}
		return $this->field($fields)->select();
	}
}