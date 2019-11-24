<?php
namespace Lucinda\NoSQL\Vendor\Memcached;

/**
 * Encapsulates a data source to use for memcached connections via memcached driver.
 */
class DataSource extends \Lucinda\NoSQL\ServerDataSource implements \Lucinda\NoSQL\DataSource
{
    /**
     * Gets default port specific to no-sql vendor.
     *
     * @return integer
     */
    protected function getDefaultPort(): int
    {
        return 11211;
    }
}
