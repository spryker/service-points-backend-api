<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ServicePointsBackendApi;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Spryker\Glue\Kernel\AbstractBundleConfig;
use Symfony\Component\HttpFoundation\Response;

class ServicePointsBackendApiConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @var string
     */
    public const RESOURCE_SERVICE_POINTS = 'service-points';

    /**
     * @api
     *
     * @var string
     */
    public const RESOURCE_SERVICE_POINT_ADDRESSES = 'service-point-addresses';

    /**
     * @api
     *
     * @var string
     */
    public const RESOURCE_SERVICE_TYPES = 'service-types';

    /**
     * @api
     *
     * @var string
     */
    public const RESOURCE_SERVICES = 'services';

    /**
     * @api
     *
     * @var string
     */
    public const RESPONSE_CODE_UNKNOWN_ERROR = '5400';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePoint\ExistenceByUuidServicePointValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ENTITY_NOT_FOUND
     *
     * @api
     *
     * @var string
     */
    public const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ENTITY_NOT_FOUND = 'service_point.validation.service_point_entity_not_found';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\ExistenceByUuidServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ENTITY_NOT_FOUND
     *
     * @api
     *
     * @var string
     */
    public const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ENTITY_NOT_FOUND = 'service_point.validation.service_point_address_entity_not_found';

    /**
     * @api
     *
     * @var string
     */
    public const GLOSSARY_KEY_VALIDATION_WRONG_REQUEST_BODY = 'service_point.validation.wrong_request_body';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\UuidExistenceServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_ENTITY_NOT_FOUND
     *
     * @api
     *
     * @var string
     */
    public const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_ENTITY_NOT_FOUND = 'service_point.validation.service_type_entity_not_found';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\Service\UuidExistenceServiceValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_ENTITY_NOT_FOUND
     *
     * @api
     *
     * @var string
     */
    public const GLOSSARY_KEY_VALIDATION_SERVICE_ENTITY_NOT_FOUND = 'service_point.validation.service_entity_not_found';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePoint\KeyExistenceServicePointValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_EXISTS
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_EXISTS = 'service_point.validation.service_point_key_exists';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePoint\KeyLengthServicePointValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_WRONG_LENGTH = 'service_point.validation.service_point_key_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePoint\KeyUniquenessServicePointValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_IS_NOT_UNIQUE
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_IS_NOT_UNIQUE = 'service_point.validation.service_point_key_is_not_unique';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePoint\NameLengthServicePointValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_NAME_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_NAME_WRONG_LENGTH = 'service_point.validation.service_point_name_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePoint\StoreExistenceServicePointValidatorRule::GLOSSARY_KEY_VALIDATION_STORE_DOES_NOT_EXIST
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_STORE_DOES_NOT_EXIST = 'service_point.validation.store_does_not_exist';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\CountryAndRegionExistenceByIso2CodeServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_COUNTRY_ENTITY_NOT_FOUND
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_COUNTRY_ENTITY_NOT_FOUND = 'service_point.validation.country_entity_not_found';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\CountryAndRegionExistenceByIso2CodeServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_REGION_ENTITY_NOT_FOUND
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_REGION_ENTITY_NOT_FOUND = 'service_point.validation.region_entity_not_found';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\AddressLengthServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_ADDRESS1_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_ADDRESS1_WRONG_LENGTH = 'service_point.validation.service_point_address_address1_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\AddressLengthServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_ADDRESS2_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_ADDRESS2_WRONG_LENGTH = 'service_point.validation.service_point_address_address2_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\AddressLengthServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_ADDRESS3_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_ADDRESS3_WRONG_LENGTH = 'service_point.validation.service_point_address_address3_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\CityLengthServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_CITY_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_CITY_WRONG_LENGTH = 'service_point.validation.service_point_address_city_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\ZipCodeLengthServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ZIP_CODE_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ZIP_CODE_WRONG_LENGTH = 'service_point.validation.service_point_address_zip_code_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\ServicePointUuidUniquenessServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_SERVICE_POINT_UUID_IS_NOT_UNIQUE
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_SERVICE_POINT_UUID_IS_NOT_UNIQUE = 'service_point.validation.service_point_uuid_is_not_unique';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServicePointAddress\ServicePointHasSingleServicePointAddressValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ALREADY_EXISTS
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ALREADY_EXISTS = 'service_point.validation.service_point_address_already_exists';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\KeyExistenceServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_EXISTS
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_EXISTS = 'service_point.validation.service_type_key_exists';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\KeyLengthServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_WRONG_LENGTH = 'service_point.validation.service_type_key_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\KeyUniquenessServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_IS_NOT_UNIQUE
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_IS_NOT_UNIQUE = 'service_point.validation.service_type_key_is_not_unique';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\KeyImmutabilityServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_IMMUTABILITY
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_IMMUTABILITY = 'service_point.validation.service_type_key_immutability';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\NameLengthServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_WRONG_LENGTH = 'service_point.validation.service_type_name_wrong_length';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\NameUniquenessServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_IS_NOT_UNIQUE
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_IS_NOT_UNIQUE = 'service_point.validation.service_type_name_is_not_unique';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\ServiceType\NameExistenceServiceTypeValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_EXISTS
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_EXISTS = 'service_point.validation.service_type_name_exists';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\Service\KeyExistenceServiceValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_EXISTS
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_KEY_EXISTS = 'service_point.validation.service_key_exists';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\Service\KeyImmutabilityServiceValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_IMMUTABILITY
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_KEY_IMMUTABILITY = 'service_point.validation.service_key_immutability';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\Service\KeyUniquenessServiceValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_IS_NOT_UNIQUE
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_KEY_IS_NOT_UNIQUE = 'service_point.validation.service_key_is_not_unique';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\Service\ServiceTypeExistenceServiceValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_RELATION_ALREADY_EXISTS
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_RELATION_ALREADY_EXISTS = 'service_point.validation.service_type_relation_already_exists';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\Service\ServiceTypeUniquenessServiceValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_RELATION_IS_NOT_UNIQUE
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_RELATION_IS_NOT_UNIQUE = 'service_point.validation.service_type_relation_is_not_unique';

    /**
     * @uses \Spryker\Zed\ServicePoint\Business\Validator\Rule\Service\KeyLengthServiceValidatorRule::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_WRONG_LENGTH
     *
     * @var string
     */
    protected const GLOSSARY_KEY_VALIDATION_SERVICE_KEY_WRONG_LENGTH = 'service_point.validation.service_key_wrong_length';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_WRONG_REQUEST_BODY = '5401';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_ENTITY_NOT_FOUND = '5403';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_KEY_EXISTS = '5404';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_KEY_WRONG_LENGTH = '5405';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_KEY_IS_NOT_UNIQUE = '5406';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_NAME_WRONG_LENGTH = '5407';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_STORE_DOES_NOT_EXIST = '5408';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_COUNTRY_DOES_NOT_EXIST = '5409';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_REGION_DOES_NOT_EXIST = '5410';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_ADDRESS_ADDRESS1_WRONG_LENGTH = '5411';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_ADDRESS_ADDRESS2_WRONG_LENGTH = '5412';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_ADDRESS_ADDRESS3_WRONG_LENGTH = '5413';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_ADDRESS_CITY_WRONG_LENGTH = '5414';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_ADDRESS_ZIP_CODE_WRONG_LENGTH = '5415';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_ADDRESS_SERVICE_POINT_UUID_IS_NOT_UNIQUE = '5416';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_POINT_ADDRESS_EXISTS = '5417';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_TYPE_ENTITY_NOT_FOUND = '5418';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_TYPE_KEY_EXISTS = '5419';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_TYPE_KEY_WRONG_LENGTH = '5420';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_TYPE_KEY_IS_NOT_UNIQUE = '5421';

    /**
     * @var string
     */
    protected const RESPONSE_CODE_SERVICE_TYPE_NAME_WRONG_LENGTH = '5422';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_TYPE_KEY_IMMUTABLE = '5423';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_TYPE_NAME_IS_NOT_UNIQUE = '5424';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_TYPE_NAME_EXISTS = '5425';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_KEY_EXISTS = '5426';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_KEY_IMMUTABLE = '5427';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_KEY_IS_NOT_UNIQUE = '5428';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_TYPE_RELATION_ALREADY_EXISTS = '5429';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_TYPE_RELATION_IS_NOT_UNIQUE = '5430';

    /**
     * @var string
     */
    protected const RESPONSE_SERVICE_KEY_WRONG_LENGTH = '5431';

    /**
     * Specification:
     * - Returns a map of glossary keys to REST error data.
     *
     * @api
     *
     * @return array<string, array<string, mixed>>
     */
    public function getGlossaryKeyToErrorDataMapping(): array
    {
        return [
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ENTITY_NOT_FOUND => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_ENTITY_NOT_FOUND,
                GlueErrorTransfer::STATUS => Response::HTTP_NOT_FOUND,
            ],
            static::GLOSSARY_KEY_VALIDATION_WRONG_REQUEST_BODY => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_WRONG_REQUEST_BODY,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_EXISTS => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_KEY_EXISTS,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_KEY_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_KEY_IS_NOT_UNIQUE => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_KEY_IS_NOT_UNIQUE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_NAME_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_NAME_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_STORE_DOES_NOT_EXIST => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_STORE_DOES_NOT_EXIST,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_COUNTRY_ENTITY_NOT_FOUND => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_COUNTRY_DOES_NOT_EXIST,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_REGION_ENTITY_NOT_FOUND => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_REGION_DOES_NOT_EXIST,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_ADDRESS1_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_ADDRESS_ADDRESS1_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_ADDRESS2_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_ADDRESS_ADDRESS2_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_ADDRESS3_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_ADDRESS_ADDRESS3_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_CITY_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_ADDRESS_CITY_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ZIP_CODE_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_ADDRESS_ZIP_CODE_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_SERVICE_POINT_UUID_IS_NOT_UNIQUE => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_ADDRESS_SERVICE_POINT_UUID_IS_NOT_UNIQUE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_POINT_ADDRESS_ALREADY_EXISTS => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_POINT_ADDRESS_EXISTS,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_ENTITY_NOT_FOUND => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_TYPE_ENTITY_NOT_FOUND,
                GlueErrorTransfer::STATUS => Response::HTTP_NOT_FOUND,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_EXISTS => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_TYPE_KEY_EXISTS,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_TYPE_KEY_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_IS_NOT_UNIQUE => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_TYPE_KEY_IS_NOT_UNIQUE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_CODE_SERVICE_TYPE_NAME_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_KEY_IMMUTABILITY => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_TYPE_KEY_IMMUTABLE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_IS_NOT_UNIQUE => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_TYPE_NAME_IS_NOT_UNIQUE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_NAME_EXISTS => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_TYPE_NAME_EXISTS,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_EXISTS => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_KEY_EXISTS,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_IMMUTABILITY => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_KEY_IMMUTABLE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_IS_NOT_UNIQUE => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_KEY_IS_NOT_UNIQUE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_RELATION_ALREADY_EXISTS => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_TYPE_RELATION_ALREADY_EXISTS,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_TYPE_RELATION_IS_NOT_UNIQUE => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_TYPE_RELATION_IS_NOT_UNIQUE,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
            static::GLOSSARY_KEY_VALIDATION_SERVICE_KEY_WRONG_LENGTH => [
                GlueErrorTransfer::CODE => static::RESPONSE_SERVICE_KEY_WRONG_LENGTH,
                GlueErrorTransfer::STATUS => Response::HTTP_BAD_REQUEST,
            ],
        ];
    }
}
