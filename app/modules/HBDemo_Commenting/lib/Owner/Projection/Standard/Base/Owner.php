<?php
/*
 * AUTOGENERATED CODE - DO NOT EDIT!
 *
 * This base class was generated by the Trellis library and
 * must not be modified manually. Any modifications to this
 * file will be lost upon triggering the next automatic
 * class generation.
 *
 * If you are looking for a place to alter the behaviour of
 * 'Owner' entities please see the skeleton
 * class 'Owner'. Modifications to the skeleton
 * file will prevail any subsequent class generation runs.
 *
 * To define new attributes or adjust existing attributes and their
 * default options modify the schema definition file of
 * the 'Owner' type.
 *
 * @see https://github.com/honeybee/trellis
 */

namespace HBDemo\Commenting\Owner\Projection\Standard\Base;

use Honeybee\Projection\Projection;

/**
 * Serves as the base class to the 'Owner' entity skeleton.
 *
 * This class contains definitions for attributes and their options available
 * on 'Owner' instances. Modifications to getters and setters
 * as well as new additional helper methods should not be placed in here,
 * but be implemented within the skeleton class 'Owner'.
 *
 * Attributes can have default and null values set via their options. The keys
 * are named 'default_value' and 'null_value' respectively.
 *
 * This class extends the 'Projection' class to get the change events and
 * validation handling behaviour of that class.
 */
abstract class Owner extends Projection
{
    /**
     * Returns the current value of the 'name' attribute on this
     * 'Owner' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'name'. Null value otherwise (defaults to NULL).
     */
    public function getName()
    {
        return $this->getValue('name');
    }

    /**
     * Returns the current value of the 'email' attribute on this
     * 'Owner' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'email'. Null value otherwise (defaults to NULL).
     */
    public function getEmail()
    {
        return $this->getValue('email');
    }

    /**
     * Returns the current value of the 'password_hash' attribute on this
     * 'Owner' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'password_hash'. Null value otherwise (defaults to NULL).
     */
    public function getPasswordHash()
    {
        return $this->getValue('password_hash');
    }

    /**
     * Returns the current value of the 'authorization_token' attribute on this
     * 'Owner' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'authorization_token'. Null value otherwise (defaults to NULL).
     */
    public function getAuthorizationToken()
    {
        return $this->getValue('authorization_token');
    }

    /**
     * Returns the current value of the 'authorization_expires' attribute on this
     * 'Owner' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'authorization_expires'. Null value otherwise (defaults to NULL).
     */
    public function getAuthorizationExpires()
    {
        return $this->getValue('authorization_expires');
    }
}
