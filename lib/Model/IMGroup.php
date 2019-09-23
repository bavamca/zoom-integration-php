<?php
/**
 * IMGroup
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
use \Swagger\Client\ObjectSerializer;

/**
 * IMGroup Class Doc Comment
 *
 * @category Class
 * @description IM Group object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IMGroup extends Group 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IMGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'search_by_domain' => 'bool',
        'search_by_account' => 'bool',
        'search_by_ma_account' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'search_by_domain' => null,
        'search_by_account' => null,
        'search_by_ma_account' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'search_by_domain' => 'search_by_domain',
        'search_by_account' => 'search_by_account',
        'search_by_ma_account' => 'search_by_ma_account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'search_by_domain' => 'setSearchByDomain',
        'search_by_account' => 'setSearchByAccount',
        'search_by_ma_account' => 'setSearchByMaAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'search_by_domain' => 'getSearchByDomain',
        'search_by_account' => 'getSearchByAccount',
        'search_by_ma_account' => 'getSearchByMaAccount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const TYPE_NORMAL = 'normal';
    const TYPE_SHARED = 'shared';
    const TYPE_RESTRICTED = 'restricted';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_SHARED,
            self::TYPE_RESTRICTED,
        ];
    }
    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['type'] = isset($data['type']) ? $data['type'] : 'normal';
        $this->container['search_by_domain'] = isset($data['search_by_domain']) ? $data['search_by_domain'] : null;
        $this->container['search_by_account'] = isset($data['search_by_account']) ? $data['search_by_account'] : null;
        $this->container['search_by_ma_account'] = isset($data['search_by_ma_account']) ? $data['search_by_ma_account'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type IM Group type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets search_by_domain
     *
     * @return bool
     */
    public function getSearchByDomain()
    {
        return $this->container['search_by_domain'];
    }

    /**
     * Sets search_by_domain
     *
     * @param bool $search_by_domain Members can search others in the same email domain
     *
     * @return $this
     */
    public function setSearchByDomain($search_by_domain)
    {
        $this->container['search_by_domain'] = $search_by_domain;

        return $this;
    }

    /**
     * Gets search_by_account
     *
     * @return bool
     */
    public function getSearchByAccount()
    {
        return $this->container['search_by_account'];
    }

    /**
     * Sets search_by_account
     *
     * @param bool $search_by_account Members can search others under same account
     *
     * @return $this
     */
    public function setSearchByAccount($search_by_account)
    {
        $this->container['search_by_account'] = $search_by_account;

        return $this;
    }

    /**
     * Gets search_by_ma_account
     *
     * @return bool
     */
    public function getSearchByMaAccount()
    {
        return $this->container['search_by_ma_account'];
    }

    /**
     * Sets search_by_ma_account
     *
     * @param bool $search_by_ma_account Members can search others under same master account, including all sub accounts
     *
     * @return $this
     */
    public function setSearchByMaAccount($search_by_ma_account)
    {
        $this->container['search_by_ma_account'] = $search_by_ma_account;

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


