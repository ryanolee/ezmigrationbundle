<?php

namespace Kaliop\eZMigrationBundle\API;

interface SortingMatcherInterface extends MatcherInterface
{
    /**
     * Returns an array of items, or an array-like object, with all items which satisfy the conditions $conditions
     *
     * @param array $conditions
     * @param array $sort
     * @param int $offset
     * @param int $limit
     * @return array|\ArrayObject
     * @throws \Kaliop\eZMigrationBundle\API\Exception\InvalidMatchConditionsException
     * @throws \Kaliop\eZMigrationBundle\API\Exception\InvalidSortConditionsException
     */
    public function match(array $conditions, array $sort = array(), $offset = 0, $limit = 0);

    /**
     * Like match, but will throw an exception if there are 0 or more than 1 items matching
     *
     * @param array $conditions
     * @param array $sort
     * @param int $offset
     * @return mixed
     * @throws \Kaliop\eZMigrationBundle\API\Exception\InvalidMatchConditionsException
     * @throws \Kaliop\eZMigrationBundle\API\Exception\InvalidSortConditionsException
     * @throws \Kaliop\eZMigrationBundle\API\Exception\InvalidMatchResultsNumberException
     */
    public function matchOne(array $conditions, array $sort = array(), $offset = 0);
}
