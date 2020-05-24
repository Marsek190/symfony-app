<?php
declare(strict_types=1);

namespace Core\Entity\Sql;


use Core\BaseInterface\ISorter;
use Core\BaseInterface\ISqlParams;

class SqlParams implements ISqlParams
{
    protected int $offset;
    protected int $limit;
    protected ISorter $sorter;

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return SqlParams
     */
    public function setOffset(int $offset): SqlParams
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return SqlParams
     */
    public function setLimit(int $limit): SqlParams
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return ISorter
     */
    public function getSorter(): ISorter
    {
        return $this->sorter;
    }

    /**
     * @param ISorter $sorter
     * @return SqlParams
     */
    public function setSorter(ISorter $sorter): SqlParams
    {
        $this->sorter = $sorter;
        return $this;
    }
}