<?php
/**
 * PAC
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * API Description
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developer@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PAC Class Doc Comment
 *
 * @category Class
 * @description List of PAC Accounts
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PAC implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PAC';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dedicated_dial_in_number' => '\Swagger\Client\Model\PACDedicatedDialInNumber[]',
        'global_dial_in_numbers' => '\Swagger\Client\Model\PACDedicatedDialInNumber[]',
        'conference_id' => 'int',
        'participant_password' => 'string',
        'listen_only_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dedicated_dial_in_number' => null,
        'global_dial_in_numbers' => null,
        'conference_id' => null,
        'participant_password' => null,
        'listen_only_password' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dedicated_dial_in_number' => 'dedicated_dial_in_number',
        'global_dial_in_numbers' => 'global_dial_in_numbers',
        'conference_id' => 'conference_id',
        'participant_password' => 'participant_password',
        'listen_only_password' => 'listen_only_password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dedicated_dial_in_number' => 'setDedicatedDialInNumber',
        'global_dial_in_numbers' => 'setGlobalDialInNumbers',
        'conference_id' => 'setConferenceId',
        'participant_password' => 'setParticipantPassword',
        'listen_only_password' => 'setListenOnlyPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dedicated_dial_in_number' => 'getDedicatedDialInNumber',
        'global_dial_in_numbers' => 'getGlobalDialInNumbers',
        'conference_id' => 'getConferenceId',
        'participant_password' => 'getParticipantPassword',
        'listen_only_password' => 'getListenOnlyPassword'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['dedicated_dial_in_number'] = isset($data['dedicated_dial_in_number']) ? $data['dedicated_dial_in_number'] : null;
        $this->container['global_dial_in_numbers'] = isset($data['global_dial_in_numbers']) ? $data['global_dial_in_numbers'] : null;
        $this->container['conference_id'] = isset($data['conference_id']) ? $data['conference_id'] : null;
        $this->container['participant_password'] = isset($data['participant_password']) ? $data['participant_password'] : null;
        $this->container['listen_only_password'] = isset($data['listen_only_password']) ? $data['listen_only_password'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets dedicated_dial_in_number
     *
     * @return \Swagger\Client\Model\PACDedicatedDialInNumber[]
     */
    public function getDedicatedDialInNumber()
    {
        return $this->container['dedicated_dial_in_number'];
    }

    /**
     * Sets dedicated_dial_in_number
     *
     * @param \Swagger\Client\Model\PACDedicatedDialInNumber[] $dedicated_dial_in_number List of Dedicated Dial In Numbers
     *
     * @return $this
     */
    public function setDedicatedDialInNumber($dedicated_dial_in_number)
    {
        $this->container['dedicated_dial_in_number'] = $dedicated_dial_in_number;

        return $this;
    }

    /**
     * Gets global_dial_in_numbers
     *
     * @return \Swagger\Client\Model\PACDedicatedDialInNumber[]
     */
    public function getGlobalDialInNumbers()
    {
        return $this->container['global_dial_in_numbers'];
    }

    /**
     * Sets global_dial_in_numbers
     *
     * @param \Swagger\Client\Model\PACDedicatedDialInNumber[] $global_dial_in_numbers List of Global Dial In Numbers
     *
     * @return $this
     */
    public function setGlobalDialInNumbers($global_dial_in_numbers)
    {
        $this->container['global_dial_in_numbers'] = $global_dial_in_numbers;

        return $this;
    }

    /**
     * Gets conference_id
     *
     * @return int
     */
    public function getConferenceId()
    {
        return $this->container['conference_id'];
    }

    /**
     * Sets conference_id
     *
     * @param int $conference_id Conference ID
     *
     * @return $this
     */
    public function setConferenceId($conference_id)
    {
        $this->container['conference_id'] = $conference_id;

        return $this;
    }

    /**
     * Gets participant_password
     *
     * @return string
     */
    public function getParticipantPassword()
    {
        return $this->container['participant_password'];
    }

    /**
     * Sets participant_password
     *
     * @param string $participant_password Participant Password, numeric value, length is less than 6
     *
     * @return $this
     */
    public function setParticipantPassword($participant_password)
    {
        $this->container['participant_password'] = $participant_password;

        return $this;
    }

    /**
     * Gets listen_only_password
     *
     * @return string
     */
    public function getListenOnlyPassword()
    {
        return $this->container['listen_only_password'];
    }

    /**
     * Sets listen_only_password
     *
     * @param string $listen_only_password Listen-Only Password, numeric value, length is less than 6
     *
     * @return $this
     */
    public function setListenOnlyPassword($listen_only_password)
    {
        $this->container['listen_only_password'] = $listen_only_password;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


