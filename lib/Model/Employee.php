<?php
/**
 * Employee
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Manage Employees APIs
 *
 * This API supports all services required to manage Employees on HR system
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 1.0.16
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
 * Employee Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Employee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Employee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'birthdate' => 'string',
        'country' => 'string',
        'created' => 'float',
        'customer_id' => 'string',
        'email' => 'string',
        'email_verified' => 'string',
        'family_name' => 'string',
        'formatted' => 'string',
        'full_name' => 'string',
        'full_name' => 'string',
        'gender' => 'string',
        'given_name' => 'string',
        'house_name' => 'string',
        'locale' => 'string',
        'locality' => 'string',
        'middle_name' => 'string',
        'mobile_number' => 'string',
        'modified' => 'float',
        'nickname' => 'string',
        'password' => 'string',
        'picture' => 'string',
        'postal_code' => 'float',
        'preferred_username' => 'string',
        'profile' => 'string',
        'region' => 'string',
        'street' => 'string',
        'street_address' => 'string',
        'username' => 'string',
        'website' => 'string',
        'zoneinfo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'birthdate' => null,
        'country' => null,
        'created' => null,
        'customer_id' => null,
        'email' => null,
        'email_verified' => null,
        'family_name' => null,
        'formatted' => null,
        'full_name' => null,
        'full_name' => null,
        'gender' => null,
        'given_name' => null,
        'house_name' => null,
        'locale' => null,
        'locality' => null,
        'middle_name' => null,
        'mobile_number' => null,
        'modified' => null,
        'nickname' => null,
        'password' => null,
        'picture' => null,
        'postal_code' => null,
        'preferred_username' => null,
        'profile' => null,
        'region' => null,
        'street' => null,
        'street_address' => null,
        'username' => null,
        'website' => null,
        'zoneinfo' => null
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
        'birthdate' => 'birthdate',
        'country' => 'country',
        'created' => 'created',
        'customer_id' => 'customerId',
        'email' => 'email',
        'email_verified' => 'email_verified',
        'family_name' => 'family_name',
        'formatted' => 'formatted',
        'full_name' => 'fullName',
        'full_name' => 'full_name',
        'gender' => 'gender',
        'given_name' => 'given_name',
        'house_name' => 'house_name',
        'locale' => 'locale',
        'locality' => 'locality',
        'middle_name' => 'middle_name',
        'mobile_number' => 'mobileNumber',
        'modified' => 'modified',
        'nickname' => 'nickname',
        'password' => 'password',
        'picture' => 'picture',
        'postal_code' => 'postal_code',
        'preferred_username' => 'preferred_username',
        'profile' => 'profile',
        'region' => 'region',
        'street' => 'street',
        'street_address' => 'street_address',
        'username' => 'username',
        'website' => 'website',
        'zoneinfo' => 'zoneinfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'birthdate' => 'setBirthdate',
        'country' => 'setCountry',
        'created' => 'setCreated',
        'customer_id' => 'setCustomerId',
        'email' => 'setEmail',
        'email_verified' => 'setEmailVerified',
        'family_name' => 'setFamilyName',
        'formatted' => 'setFormatted',
        'full_name' => 'setFullName',
        'full_name' => 'setFullName',
        'gender' => 'setGender',
        'given_name' => 'setGivenName',
        'house_name' => 'setHouseName',
        'locale' => 'setLocale',
        'locality' => 'setLocality',
        'middle_name' => 'setMiddleName',
        'mobile_number' => 'setMobileNumber',
        'modified' => 'setModified',
        'nickname' => 'setNickname',
        'password' => 'setPassword',
        'picture' => 'setPicture',
        'postal_code' => 'setPostalCode',
        'preferred_username' => 'setPreferredUsername',
        'profile' => 'setProfile',
        'region' => 'setRegion',
        'street' => 'setStreet',
        'street_address' => 'setStreetAddress',
        'username' => 'setUsername',
        'website' => 'setWebsite',
        'zoneinfo' => 'setZoneinfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'birthdate' => 'getBirthdate',
        'country' => 'getCountry',
        'created' => 'getCreated',
        'customer_id' => 'getCustomerId',
        'email' => 'getEmail',
        'email_verified' => 'getEmailVerified',
        'family_name' => 'getFamilyName',
        'formatted' => 'getFormatted',
        'full_name' => 'getFullName',
        'full_name' => 'getFullName',
        'gender' => 'getGender',
        'given_name' => 'getGivenName',
        'house_name' => 'getHouseName',
        'locale' => 'getLocale',
        'locality' => 'getLocality',
        'middle_name' => 'getMiddleName',
        'mobile_number' => 'getMobileNumber',
        'modified' => 'getModified',
        'nickname' => 'getNickname',
        'password' => 'getPassword',
        'picture' => 'getPicture',
        'postal_code' => 'getPostalCode',
        'preferred_username' => 'getPreferredUsername',
        'profile' => 'getProfile',
        'region' => 'getRegion',
        'street' => 'getStreet',
        'street_address' => 'getStreetAddress',
        'username' => 'getUsername',
        'website' => 'getWebsite',
        'zoneinfo' => 'getZoneinfo'
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
        $this->container['birthdate'] = isset($data['birthdate']) ? $data['birthdate'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_verified'] = isset($data['email_verified']) ? $data['email_verified'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['formatted'] = isset($data['formatted']) ? $data['formatted'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['house_name'] = isset($data['house_name']) ? $data['house_name'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['mobile_number'] = isset($data['mobile_number']) ? $data['mobile_number'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['preferred_username'] = isset($data['preferred_username']) ? $data['preferred_username'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['zoneinfo'] = isset($data['zoneinfo']) ? $data['zoneinfo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
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

        if ($this->container['username'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets birthdate
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param string $birthdate birthdate
     *
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets created
     *
     * @return float
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param float $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_verified
     *
     * @return string
     */
    public function getEmailVerified()
    {
        return $this->container['email_verified'];
    }

    /**
     * Sets email_verified
     *
     * @param string $email_verified email_verified
     *
     * @return $this
     */
    public function setEmailVerified($email_verified)
    {
        $this->container['email_verified'] = $email_verified;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name family_name
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets formatted
     *
     * @return string
     */
    public function getFormatted()
    {
        return $this->container['formatted'];
    }

    /**
     * Sets formatted
     *
     * @param string $formatted formatted
     *
     * @return $this
     */
    public function setFormatted($formatted)
    {
        $this->container['formatted'] = $formatted;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name given_name
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets house_name
     *
     * @return string
     */
    public function getHouseName()
    {
        return $this->container['house_name'];
    }

    /**
     * Sets house_name
     *
     * @param string $house_name house_name
     *
     * @return $this
     */
    public function setHouseName($house_name)
    {
        $this->container['house_name'] = $house_name;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality locality
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name middle_name
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets mobile_number
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string $mobile_number mobile_number
     *
     * @return $this
     */
    public function setMobileNumber($mobile_number)
    {
        $this->container['mobile_number'] = $mobile_number;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return float
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param float $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname nickname
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param string $picture picture
     *
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return float
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param float $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets preferred_username
     *
     * @return string
     */
    public function getPreferredUsername()
    {
        return $this->container['preferred_username'];
    }

    /**
     * Sets preferred_username
     *
     * @param string $preferred_username preferred_username
     *
     * @return $this
     */
    public function setPreferredUsername($preferred_username)
    {
        $this->container['preferred_username'] = $preferred_username;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string $profile profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string $street_address street_address
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets zoneinfo
     *
     * @return string
     */
    public function getZoneinfo()
    {
        return $this->container['zoneinfo'];
    }

    /**
     * Sets zoneinfo
     *
     * @param string $zoneinfo zoneinfo
     *
     * @return $this
     */
    public function setZoneinfo($zoneinfo)
    {
        $this->container['zoneinfo'] = $zoneinfo;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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