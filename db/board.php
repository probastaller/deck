<?php
// db/author.php
namespace OCA\Deck\Db;

use JsonSerializable;

class Board extends \OCA\Deck\Db\Entity implements JsonSerializable {

    public $id;
    protected $title;
    protected $owner;
    protected $color;
    protected $archived;
    protected $labels;

    public function __construct() {
        $this->addType('id','integer');
        $this->addRelation('labels');
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'owner' => $this->owner,
            'color' => $this->color,
            'labels' => $this->labels,
        ];
    }
}