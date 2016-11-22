<?php

namespace DrupalPsr\Cache;

use Fig\Cache\BasicCacheItemAccessorsTrait;
use Fig\Cache\BasicCacheItemTrait;
use Psr\Cache\CacheItemInterface;

/**
 * Class Item
 * @package DrupalPsr\Cache
 */
class Item implements CacheItemInterface{
  use BasicCacheItemTrait;
  use BasicCacheItemAccessorsTrait;

  /**
   * Constructs a new DrupalCacheItem.
   *
   * @param string $key
   *   The key of the cache item this object represents.
   * @param array $data
   *   An associative array of data from the Memory Pool.
   */
  public function __construct($key, array $data) {
    $this->key = $key;
    $this->value = $data['data'];
    $this->expiration = $data['expire'];
    $this->hit = $data['hit'];
  }

}
