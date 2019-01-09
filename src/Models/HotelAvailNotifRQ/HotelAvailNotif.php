<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelAvailNotifRQ;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Root Schema
 */
class HotelAvailNotif extends ClassStructure
{
    /** @var AvailStatusMessagesItems[]|array */
    public $availStatusMessages = NULL;

    /**
     * @param AvailStatusMessagesItems[]|array $availStatusMessages
     */
    public function __construct($availStatusMessages = NULL)
    {
        $this->availStatusMessages = $availStatusMessages;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->availStatusMessages = Schema::arr();
        $properties->availStatusMessages->items = AvailStatusMessagesItems::schema();
        $properties->availStatusMessages->title = "The Availstatusmessages Schema";
        $ownerSchema->addPropertyMapping('AvailStatusMessages', self::names()->availStatusMessages);
        $ownerSchema->type = 'object';
        $ownerSchema->schema = "http://json-schema.org/draft-07/schema#";
        $ownerSchema->title = "The Root Schema";
        $ownerSchema->required = array(
            0 => 'AvailStatusMessages',
        );
    }

    /**
     * @return AvailStatusMessagesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getAvailStatusMessages()
    {
        return $this->availStatusMessages;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItems[]|array $availStatusMessages
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAvailStatusMessages($availStatusMessages = NULL)
    {
        $this->availStatusMessages = $availStatusMessages;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItems $AvailStatusMessagesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addAvailStatusMessages(AvailStatusMessagesItems $AvailStatusMessagesItems)
    {
        if(!is_array($this->availStatusMessages)) { $this->availStatusMessages = []; }
        $this->availStatusMessages[] = $AvailStatusMessagesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}