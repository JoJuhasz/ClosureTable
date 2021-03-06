<?php

namespace EspadaV8\ClosureTable\Contracts;

/**
 * Basic ClosureTable model interface.
 *
 * @package EspadaV8\ClosureTable
 */
interface ClosureTableInterface
{
    /**
     * Get the short name of the "ancestor" column.
     *
     * @return string
     */
    public function getAncestorColumn();

    /**
     * Get the short name of the "descendant" column.
     *
     * @return string
     */
    public function getDescendantColumn();

    /**
     * Get the short name of the "depth" column.
     *
     * @return string
     */
    public function getDepthColumn();

    /**
     * Inserts new node into closure table.
     *
     * @param string $ancestorId
     * @param string $descendantId
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function insertNode($ancestorId, $descendantId);

    /**
     * Make a node a descendant of another ancestor or makes it a root node.
     *
     * @param string $ancestorId
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function moveNodeTo($ancestorId = null);
}
