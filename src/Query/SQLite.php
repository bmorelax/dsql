<?php // vim:ts=4:sw=4:et:fdm=marker

namespace atk4\dsql;

/**
 * Perform query operation on SQLite server
 */
class Query_SQLite extends Query
{
    /**
     * SQLite specific template overwrites
     *
     * @see Expression::__construct
     *
     * @param string|array $properties
     * @param array        $arguments
     */
    public function __construct($properties = [], $arguments = null)
    {
        parent::__construct($properties, $arguments);

        // SQLite doesn't support TRUNCATE TABLE myTable syntax, so we use DELETE instead
        $this->templates['truncate'] = 'delete [from] [table]';
    }
}
