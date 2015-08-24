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
 * 'Topic' entities please see the skeleton
 * class 'Topic'. Modifications to the skeleton
 * file will prevail any subsequent class generation runs.
 *
 * To define new attributes or adjust existing attributes and their
 * default options modify the schema definition file of
 * the 'Topic' type.
 *
 * @see https://github.com/honeybee/trellis
 */

namespace HBDemo\Commenting\Topic\Projection\Standard\Base;

use Honeybee\Projection\Projection;

/**
 * Serves as the base class to the 'Topic' entity skeleton.
 *
 * This class contains definitions for attributes and their options available
 * on 'Topic' instances. Modifications to getters and setters
 * as well as new additional helper methods should not be placed in here,
 * but be implemented within the skeleton class 'Topic'.
 *
 * Attributes can have default and null values set via their options. The keys
 * are named 'default_value' and 'null_value' respectively.
 *
 * This class extends the 'Projection' class to get the change events and
 * validation handling behaviour of that class.
 */
abstract class Topic extends Projection
{
    /**
     * Returns the current value of the 'url' attribute on this
     * 'Topic' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'url'. Null value otherwise (defaults to NULL).
     */
    public function getUrl()
    {
        return $this->getValue('url');
    }

    /**
     * Returns the current value of the 'title' attribute on this
     * 'Topic' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'title'. Null value otherwise (defaults to NULL).
     */
    public function getTitle()
    {
        return $this->getValue('title');
    }

    /**
     * Returns the current value of the 'description' attribute on this
     * 'Topic' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'description'. Null value otherwise (defaults to NULL).
     */
    public function getDescription()
    {
        return $this->getValue('description');
    }

    /**
     * Returns the current value of the 'account' attribute on this
     * 'Topic' entity. The 'default_value' option set for
     * this attribute is returned if no value was set. If neither a value nor
     * default value was set the 'null_value' option value is returned.
     *
     * @return mixed Value or default value of attribute 'account'. Null value otherwise (defaults to NULL).
     */
    public function getAccount()
    {
        return $this->getValue('account');
    }
}
