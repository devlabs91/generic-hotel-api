<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelRatePlanNotifRQ;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Root Schema
 */
class HotelRatePlanNotif extends ClassStructure
{
    /** @var RateAmountMessagesItems[]|array */
    public $rateAmountMessages = NULL;

    /**
     * @param RateAmountMessagesItems[]|array $rateAmountMessages
     */
    public function __construct($rateAmountMessages = NULL)
    {
        $this->rateAmountMessages = $rateAmountMessages;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->rateAmountMessages = Schema::arr();
        $properties->rateAmountMessages->items = RateAmountMessagesItems::schema();
        $properties->rateAmountMessages->title = "The Rateamountmessages Schema";
        $ownerSchema->addPropertyMapping('RateAmountMessages', self::names()->rateAmountMessages);
        $ownerSchema->type = 'object';
        $ownerSchema->schema = "http://json-schema.org/draft-07/schema#";
        $ownerSchema->title = "The Root Schema";
        $ownerSchema->required = array(
            0 => 'RateAmountMessages',
        );
    }

    /**
     * @return RateAmountMessagesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getRateAmountMessages()
    {
        return $this->rateAmountMessages;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItems[]|array $rateAmountMessages
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRateAmountMessages($rateAmountMessages = NULL)
    {
        $this->rateAmountMessages = $rateAmountMessages;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItems $RateAmountMessagesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addRateAmountMessages(RateAmountMessagesItems $RateAmountMessagesItems)
    {
        if(!is_array($this->rateAmountMessages)) { $this->rateAmountMessages = []; }
        $this->rateAmountMessages[] = $RateAmountMessagesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}