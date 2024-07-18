<?php
namespace App;

class Model
{
	public static function Init()
	{
		$uri = 'mongodb://localhost:27017';
		$client = new \MongoDB\Client($uri);

		self::$db = $client->phpProperties;
		self::$db->createCollection('properties');
	} 
	public static function InsertProperty($properties)
	{
		$collection = self::$db->properties;
		return $collection->insertOne($properties);
	}
	public static function getProperties() 
	{
		$collection = self::$db->properties;
		$list = $collection->find();
		return $list->toArray();
	}
	public static function propertiesId($id)
	{
		$collection = self::$db->properties;
		$list = $collection->findOne(['_id' => $id]);
		return $list;
	}
	private static $db;
}


