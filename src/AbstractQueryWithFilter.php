<?php

namespace Sfneal\Queries;

use Sfneal\Queries\Interfaces\DynamicQuery;
use Sfneal\Queries\Traits\ApplyFilter;

abstract class AbstractQueryWithFilter extends AbstractQuery implements DynamicQuery
{
    // Uses Filter classes for applying queries
    use ApplyFilter;

    /**
     * Array of attribute/form input name keys and Filter class values.
     *
     * @var array
     */
    public $attribute_filters;

    /**
     * Filter values to be passed to Filer classes.
     *
     * @var array
     */
    public $filter;

    /**
     * QueryWithFilter constructor.
     *
     * @param string  $filter  name of the bucket to filter by
     */
    public function __construct($filter)
    {
        $this->filter = $filter;
    }
}
