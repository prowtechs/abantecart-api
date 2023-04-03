<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class ValidationRequestList extends ListResource
{
    /**
     * Construct the ValidationRequestList
     *
     * @param Version $version    Version that contains the resource
     * @param string  $accountSid The account_sid
     *
     * @return \Twilio\Rest\Api\V2010\Account\ValidationRequestList
     */
    public function __construct(Version $version, $accountSid)
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('accountSid' => $accountSid,);

        $this->uri = '/Accounts/'.rawurlencode($accountSid).'/OutgoingCallerIds.json';
    }

    /**
     * Create a new ValidationRequestInstance
     *
     * @param string        $phoneNumber The phone_number
     * @param array|Options $options     Optional Arguments
     *
     * @return ValidationRequestInstance Newly created ValidationRequestInstance
     */
    public function create($phoneNumber, $options = array())
    {
        $options = new Values($options);

        $data = Values::of(array(
            'PhoneNumber'          => $phoneNumber,
            'FriendlyName'         => $options['friendlyName'],
            'CallDelay'            => $options['callDelay'],
            'Extension'            => $options['extension'],
            'StatusCallback'       => $options['statusCallback'],
            'StatusCallbackMethod' => $options['statusCallbackMethod'],
        ));

        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ValidationRequestInstance($this->version, $payload, $this->solution['accountSid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        return '[Twilio.Api.V2010.ValidationRequestList]';
    }
}