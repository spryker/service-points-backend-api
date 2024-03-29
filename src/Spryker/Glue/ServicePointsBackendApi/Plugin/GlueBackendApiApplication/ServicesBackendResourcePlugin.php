<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ServicePointsBackendApi\Plugin\GlueBackendApiApplication;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Generated\Shared\Transfer\ServicesBackendApiAttributesTransfer;
use Generated\Shared\Transfer\ServicesRequestBackendApiAttributesTransfer;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\Backend\AbstractResourcePlugin;
use Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin\JsonApiResourceInterface;
use Spryker\Glue\ServicePointsBackendApi\Controller\ServicesResourceController;
use Spryker\Glue\ServicePointsBackendApi\ServicePointsBackendApiConfig;

class ServicesBackendResourcePlugin extends AbstractResourcePlugin implements JsonApiResourceInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getType(): string
    {
        return ServicePointsBackendApiConfig::RESOURCE_SERVICES;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getController(): string
    {
        return ServicesResourceController::class;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer
     */
    public function getDeclaredMethods(): GlueResourceMethodCollectionTransfer
    {
        return (new GlueResourceMethodCollectionTransfer())
            ->setGetCollection(
                (new GlueResourceMethodConfigurationTransfer())
                    ->setAttributes(ServicesBackendApiAttributesTransfer::class),
            )
            ->setGet(
                (new GlueResourceMethodConfigurationTransfer())
                    ->setAttributes(ServicesBackendApiAttributesTransfer::class),
            )
            ->setPost(
                (new GlueResourceMethodConfigurationTransfer())
                    ->setAttributes(ServicesRequestBackendApiAttributesTransfer::class),
            )
            ->setPatch(
                (new GlueResourceMethodConfigurationTransfer())
                    ->setAttributes(ServicesRequestBackendApiAttributesTransfer::class),
            );
    }
}
