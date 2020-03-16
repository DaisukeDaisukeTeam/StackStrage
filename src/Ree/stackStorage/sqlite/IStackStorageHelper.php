<?php


namespace ree\stackStorage\sqlite;


use pocketmine\item\Item;

interface IStackStorageHelper
{
	const STORAGE_NOT_FOUND = 1;
	const ITEM_NOT_FOUND = 2;

	/**
	 * IStackStorageHelper constructor.
	 * @param string $path
	 */
	public function __construct(string $path);

	/**
	 * @return IStackStorageHelper
	 */
	public static function getInstance(): IStackStorageHelper ;

	/**
	 * @param string $n
	 * @return string|null
	 */
	public function getXuid(string $n): ?string ;

	/**
	 * @param string $xuid
	 * @return bool
	 */
	public function isExists(string $xuid): bool ;

	/**
	 * @param string $xuid
	 * @return array
	 */
	public function getStorage(string $xuid): array ;

	/**
	 * @param string $xuid
	 * @param array $items
	 */
	public function setStorage(string $xuid, array $items): void ;

	/**
	 * @param string $xuid
	 * @param Item $item
	 * @return int
	 */
	public function getItem(string $xuid, Item $item): int ;

	/**
	 * @param string $xuid
	 * @param Item $item
	 */
	public function addItem(string $xuid, Item $item): void ;

	/**
	 * @param string $xuid
	 * @param Item $item
	 */
	public function removeItem(string $xuid, Item $item): void ;
}