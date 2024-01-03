<?php
/**
 * ApiException
 * PHP version 5
 *
 * @category Class
 * @package  Yjopenapi\Client
 */

/** Package client
 * 
 * 
 * YuanJing OpenAPI SDK for PHP
 *
 * 
 *
 */

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api;

use \Exception;
use Rhumsaa\Uuid\Uuid;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class HeaderSelector
{

    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = [];

        $accept = $this->selectAcceptHeader($accept);
        if ($accept !== null) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);
        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    private function selectAcceptHeader($accept)
    {
        if (count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader($contentType)
    {
        if (count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        } else {
            return implode(',', $contentType);
        }
    }

   /**
    * Return the sign headers
    *
    * @param string[] $formParams
    * @param \Yjopenapi\Client\Configuration $config
    * @return string[]
    */
    public function prepareSignHeader($formParams, $queryParams, $httpMethod, $config) {
        $accessKey = $config->getAccessKey();
        $nonce = str_replace("-", "", Uuid::uuid4());
        $version = $config->getSignatureVersion();
        $method = $config->getSignatureMethod();
        $now = new \DateTime();
        $timestamp = $now->setTimezone(new \DateTimeZone('UTC'))->format('Y-m-d\TH:i:s\Z');

        $values = [];
        $values['AccessKey'] = $accessKey;
        $values['SignatureNonce'] = $nonce;
        $values['SignatureVersion'] = $version;
        $values['SignatureMethod'] = $method;
        $values['Timestamp'] = $timestamp;

        if (count($queryParams) > 0) {
            foreach ($queryParams as $queryParamName => $queryParamValue) {
                $values[$queryParamName] = $queryParamValue;
            }
        }

        if (count($formParams) > 0) {
            foreach ($formParams as $formParamName => $formParamValue) {
                $values[$formParamName] = $formParamValue;
            }
        }

        $headers = [];
        $headers['Signature'] = self::md5Hex(self::getSignRaw($values, $httpMethod, $config->getSecretKey()));
        $headers['Accesskey'] = $accessKey;
        $headers['Signaturenonce'] = $nonce;
        $headers['Signatureversion'] = $version;
        $headers['Timestamp'] = $timestamp;
        $headers['Signaturemethod'] = $method;
        return $headers;
    }

    private function getSignRaw($values, $httpMethod, $secretKey) {
        return $secretKey . '&' . self::keySignInput($values, $httpMethod);
    }

    private function keySignInput($values, $httpMethod) {
        ksort($values);

        $strToSign = $httpMethod . '&' . self::encodeURLComponent("/");

        $arr = [];
        foreach ($values as $k => $v) {
            array_push($arr, $k . '=' . self::encodeURLComponent($v));
        }
        return $strToSign . '&' . self::encodeURLComponent(implode('&', $arr));
    }

    private function encodeURLComponent($str) {
        $escape = rawurlencode($str);
        $escape = str_replace( "+", "%20", $escape);
        $escape = str_replace( "*", "%2A", $escape);
        $escape = str_replace( "%7E", "~", $escape);
        return $escape;
    }

    private function md5Hex($str) {
        return md5($str);
    }
}

