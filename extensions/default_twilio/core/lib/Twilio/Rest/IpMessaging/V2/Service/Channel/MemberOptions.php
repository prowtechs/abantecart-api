<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class MemberOptions
{
    /**
     * @param string    $roleSid                  The role_sid
     * @param integer   $lastConsumedMessageIndex The last_consumed_message_index
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     * @param \DateTime $dateCreated              The date_created
     * @param \DateTime $dateUpdated              The date_updated
     *
     * @return CreateMemberOptions Options builder
     */
    public static function create($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE)
    {
        return new CreateMemberOptions($roleSid, $lastConsumedMessageIndex, $lastConsumptionTimestamp, $dateCreated, $dateUpdated);
    }

    /**
     * @param string $identity The identity
     *
     * @return ReadMemberOptions Options builder
     */
    public static function read($identity = Values::NONE)
    {
        return new ReadMemberOptions($identity);
    }

    /**
     * @param string    $roleSid                  The role_sid
     * @param integer   $lastConsumedMessageIndex The last_consumed_message_index
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     * @param \DateTime $dateCreated              The date_created
     * @param \DateTime $dateUpdated              The date_updated
     *
     * @return UpdateMemberOptions Options builder
     */
    public static function update($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE)
    {
        return new UpdateMemberOptions($roleSid, $lastConsumedMessageIndex, $lastConsumptionTimestamp, $dateCreated, $dateUpdated);
    }
}

class CreateMemberOptions extends Options
{
    /**
     * @param string    $roleSid                  The role_sid
     * @param integer   $lastConsumedMessageIndex The last_consumed_message_index
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     * @param \DateTime $dateCreated              The date_created
     * @param \DateTime $dateUpdated              The date_updated
     */
    public function __construct($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE)
    {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
    }

    /**
     * The role_sid
     *
     * @param string $roleSid The role_sid
     *
     * @return $this Fluent Builder
     */
    public function setRoleSid($roleSid)
    {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * The last_consumed_message_index
     *
     * @param integer $lastConsumedMessageIndex The last_consumed_message_index
     *
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex($lastConsumedMessageIndex)
    {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The last_consumption_timestamp
     *
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     *
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp($lastConsumptionTimestamp)
    {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * The date_created
     *
     * @param \DateTime $dateCreated The date_created
     *
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated)
    {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date_updated
     *
     * @param \DateTime $dateUpdated The date_updated
     *
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.CreateMemberOptions '.implode(' ', $options).']';
    }
}

class ReadMemberOptions extends Options
{
    /**
     * @param string $identity The identity
     */
    public function __construct($identity = Values::NONE)
    {
        $this->options['identity'] = $identity;
    }

    /**
     * The identity
     *
     * @param string $identity The identity
     *
     * @return $this Fluent Builder
     */
    public function setIdentity($identity)
    {
        $this->options['identity'] = $identity;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.ReadMemberOptions '.implode(' ', $options).']';
    }
}

class UpdateMemberOptions extends Options
{
    /**
     * @param string    $roleSid                  The role_sid
     * @param integer   $lastConsumedMessageIndex The last_consumed_message_index
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     * @param \DateTime $dateCreated              The date_created
     * @param \DateTime $dateUpdated              The date_updated
     */
    public function __construct($roleSid = Values::NONE, $lastConsumedMessageIndex = Values::NONE, $lastConsumptionTimestamp = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE)
    {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
    }

    /**
     * The role_sid
     *
     * @param string $roleSid The role_sid
     *
     * @return $this Fluent Builder
     */
    public function setRoleSid($roleSid)
    {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * The last_consumed_message_index
     *
     * @param integer $lastConsumedMessageIndex The last_consumed_message_index
     *
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex($lastConsumedMessageIndex)
    {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The last_consumption_timestamp
     *
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     *
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp($lastConsumptionTimestamp)
    {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * The date_created
     *
     * @param \DateTime $dateCreated The date_created
     *
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated)
    {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date_updated
     *
     * @param \DateTime $dateUpdated The date_updated
     *
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.UpdateMemberOptions '.implode(' ', $options).']';
    }
}