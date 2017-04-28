<?php

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Interface_ extends ClassLike
{
    /** @var Node\Name[] Extended interfaces */
    public $extends;

    /**
     * Constructs a class node.
     *
     * @param string|Node\Identifier $name Name
     * @param array  $subNodes   Array of the following optional subnodes:
     *                           'extends' => array(): Name of extended interfaces
     *                           'stmts'   => array(): Statements
     * @param array  $attributes Additional attributes
     */
    public function __construct($name, array $subNodes = array(), array $attributes = array()) {
        parent::__construct($attributes);
        $this->name = \is_string($name) ? new Node\Identifier($name) : $name;
        $this->extends = $subNodes['extends'] ?? array();
        $this->stmts = $subNodes['stmts'] ?? array();
    }

    public function getSubNodeNames() : array {
        return array('name', 'extends', 'stmts');
    }
}
