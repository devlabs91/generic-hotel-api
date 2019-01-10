<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelRatePlanInventoryRetrieveRS;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Items Schema
 */
class RatePlansItemsRoomTypesItems extends ClassStructure
{
    /** @var string */
    public $roomTypeCode = NULL;

    /** @var string */
    public $roomTypeName = NULL;

    /** @var string */
    public $displayname = NULL;

    /** @var int */
    public $linksRate = NULL;

    /** @var int */
    public $minOccupancy = NULL;

    /** @var int */
    public $maxOccupancy = NULL;

    /** @var int */
    public $maxExtraBed = NULL;

    /** @var int */
    public $maxExtraChild = NULL;

    /** @var int */
    public $minlos = NULL;

    /** @var int */
    public $maxlos = NULL;

    /** @var string */
    public $minrate = NULL;

    /** @var string */
    public $maxrate = NULL;

    public $remark = NULL;

    /**
     * @param string $roomTypeCode
     * @param string $roomTypeName
     * @param string $displayname
     * @param int $linksRate
     * @param int $minOccupancy
     * @param int $maxOccupancy
     * @param int $maxExtraBed
     * @param int $maxExtraChild
     * @param int $minlos
     * @param int $maxlos
     * @param string $minrate
     * @param string $maxrate
     * @param $remark
     */
    public function __construct($roomTypeCode = NULL, $roomTypeName = NULL, $displayname = NULL, $linksRate = NULL, $minOccupancy = NULL, $maxOccupancy = NULL, $maxExtraBed = NULL, $maxExtraChild = NULL, $minlos = NULL, $maxlos = NULL, $minrate = NULL, $maxrate = NULL, $remark = NULL)
    {
        $this->roomTypeCode = $roomTypeCode;
        $this->roomTypeName = $roomTypeName;
        $this->displayname = $displayname;
        $this->linksRate = $linksRate;
        $this->minOccupancy = $minOccupancy;
        $this->maxOccupancy = $maxOccupancy;
        $this->maxExtraBed = $maxExtraBed;
        $this->maxExtraChild = $maxExtraChild;
        $this->minlos = $minlos;
        $this->maxlos = $maxlos;
        $this->minrate = $minrate;
        $this->maxrate = $maxrate;
        $this->remark = $remark;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->roomTypeCode = Schema::string();
        $properties->roomTypeCode->title = "The Roomtypecode Schema";
        $properties->roomTypeCode->default = "";
        $properties->roomTypeCode->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('RoomTypeCode', self::names()->roomTypeCode);
        $properties->roomTypeName = Schema::string();
        $properties->roomTypeName->title = "The Roomtypename Schema";
        $properties->roomTypeName->default = "";
        $properties->roomTypeName->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('RoomTypeName', self::names()->roomTypeName);
        $properties->displayname = Schema::string();
        $properties->displayname->title = "The Displayname Schema";
        $properties->displayname->default = "";
        $properties->displayname->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Displayname', self::names()->displayname);
        $properties->linksRate = Schema::integer();
        $properties->linksRate->title = "The Linksrate Schema";
        $properties->linksRate->default = 0;
        $ownerSchema->addPropertyMapping('LinksRate', self::names()->linksRate);
        $properties->minOccupancy = Schema::integer();
        $properties->minOccupancy->title = "The Minoccupancy Schema";
        $properties->minOccupancy->default = 0;
        $ownerSchema->addPropertyMapping('MinOccupancy', self::names()->minOccupancy);
        $properties->maxOccupancy = Schema::integer();
        $properties->maxOccupancy->title = "The Maxoccupancy Schema";
        $properties->maxOccupancy->default = 0;
        $ownerSchema->addPropertyMapping('MaxOccupancy', self::names()->maxOccupancy);
        $properties->maxExtraBed = Schema::integer();
        $properties->maxExtraBed->title = "The Maxextrabed Schema";
        $properties->maxExtraBed->default = 0;
        $ownerSchema->addPropertyMapping('MaxExtraBed', self::names()->maxExtraBed);
        $properties->maxExtraChild = Schema::integer();
        $properties->maxExtraChild->title = "The Maxextrachild Schema";
        $properties->maxExtraChild->default = 0;
        $ownerSchema->addPropertyMapping('MaxExtraChild', self::names()->maxExtraChild);
        $properties->minlos = Schema::integer();
        $properties->minlos->title = "The Minlos Schema";
        $properties->minlos->default = 0;
        $ownerSchema->addPropertyMapping('Minlos', self::names()->minlos);
        $properties->maxlos = Schema::integer();
        $properties->maxlos->title = "The Maxlos Schema";
        $properties->maxlos->default = 0;
        $ownerSchema->addPropertyMapping('Maxlos', self::names()->maxlos);
        $properties->minrate = Schema::string();
        $properties->minrate->title = "The Minrate Schema";
        $properties->minrate->default = "";
        $properties->minrate->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Minrate', self::names()->minrate);
        $properties->maxrate = Schema::string();
        $properties->maxrate->title = "The Maxrate Schema";
        $properties->maxrate->default = "";
        $properties->maxrate->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Maxrate', self::names()->maxrate);
        $properties->remark = Schema::object();
        $properties->remark->title = "The Remark Schema";
        $ownerSchema->addPropertyMapping('Remark', self::names()->remark);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'RoomTypeCode',
            1 => 'RoomTypeName',
            2 => 'Displayname',
            3 => 'LinksRate',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $roomTypeCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRoomTypeCode($roomTypeCode = NULL)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getRoomTypeName()
    {
        return $this->roomTypeName;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $roomTypeName
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRoomTypeName($roomTypeName = NULL)
    {
        $this->roomTypeName = $roomTypeName;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $displayname
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDisplayname($displayname = NULL)
    {
        $this->displayname = $displayname;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getLinksRate()
    {
        return $this->linksRate;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $linksRate
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLinksRate($linksRate = NULL)
    {
        $this->linksRate = $linksRate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMinOccupancy()
    {
        return $this->minOccupancy;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $minOccupancy
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMinOccupancy($minOccupancy = NULL)
    {
        $this->minOccupancy = $minOccupancy;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $maxOccupancy
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxOccupancy($maxOccupancy = NULL)
    {
        $this->maxOccupancy = $maxOccupancy;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMaxExtraBed()
    {
        return $this->maxExtraBed;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $maxExtraBed
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxExtraBed($maxExtraBed = NULL)
    {
        $this->maxExtraBed = $maxExtraBed;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMaxExtraChild()
    {
        return $this->maxExtraChild;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $maxExtraChild
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxExtraChild($maxExtraChild = NULL)
    {
        $this->maxExtraChild = $maxExtraChild;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMinlos()
    {
        return $this->minlos;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $minlos
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMinlos($minlos = NULL)
    {
        $this->minlos = $minlos;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMaxlos()
    {
        return $this->maxlos;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $maxlos
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxlos($maxlos = NULL)
    {
        $this->maxlos = $maxlos;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getMinrate()
    {
        return $this->minrate;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $minrate
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMinrate($minrate = NULL)
    {
        $this->minrate = $minrate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getMaxrate()
    {
        return $this->maxrate;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $maxrate
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxrate($maxrate = NULL)
    {
        $this->maxrate = $maxrate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @codeCoverageIgnoreStart
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param $remark
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRemark($remark = NULL)
    {
        $this->remark = $remark;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}