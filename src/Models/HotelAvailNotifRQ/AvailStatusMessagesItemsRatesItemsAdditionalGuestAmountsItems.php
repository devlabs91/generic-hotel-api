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
 * The Items Schema
 */
class AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems extends ClassStructure
{
    /** @var int */
    public $maxAdditionalGuests = NULL;

    /** @var int */
    public $ageQualifyingCode = NULL;

    /** @var string */
    public $amount = NULL;

    /** @var string */
    public $currencyCode = NULL;

    /**
     * @param int $maxAdditionalGuests
     * @param int $ageQualifyingCode
     * @param string $amount
     * @param string $currencyCode
     */
    public function __construct($maxAdditionalGuests = NULL, $ageQualifyingCode = NULL, $amount = NULL, $currencyCode = NULL)
    {
        $this->maxAdditionalGuests = $maxAdditionalGuests;
        $this->ageQualifyingCode = $ageQualifyingCode;
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->maxAdditionalGuests = Schema::integer();
        $properties->maxAdditionalGuests->title = "The Maxadditionalguests Schema";
        $properties->maxAdditionalGuests->default = 0;
        $ownerSchema->addPropertyMapping('MaxAdditionalGuests', self::names()->maxAdditionalGuests);
        $properties->ageQualifyingCode = Schema::integer();
        $properties->ageQualifyingCode->title = "The Agequalifyingcode Schema";
        $properties->ageQualifyingCode->default = 0;
        $ownerSchema->addPropertyMapping('AgeQualifyingCode', self::names()->ageQualifyingCode);
        $properties->amount = Schema::string();
        $properties->amount->title = "The Amount Schema";
        $properties->amount->default = "";
        $properties->amount->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Amount', self::names()->amount);
        $properties->currencyCode = Schema::string();
        $properties->currencyCode->title = "The Currencycode Schema";
        $properties->currencyCode->default = "";
        $properties->currencyCode->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('CurrencyCode', self::names()->currencyCode);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'MaxAdditionalGuests',
            1 => 'AgeQualifyingCode',
            2 => 'Amount',
            3 => 'CurrencyCode',
        );
    }

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMaxAdditionalGuests()
    {
        return $this->maxAdditionalGuests;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $maxAdditionalGuests
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxAdditionalGuests($maxAdditionalGuests = NULL)
    {
        $this->maxAdditionalGuests = $maxAdditionalGuests;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $ageQualifyingCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAgeQualifyingCode($ageQualifyingCode = NULL)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $amount
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAmount($amount = NULL)
    {
        $this->amount = $amount;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $currencyCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCurrencyCode($currencyCode = NULL)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}