<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ServicePointsBackendApi\Processor\Reader;

interface ServicePointByServiceResourceRelationshipReaderInterface
{
    /**
     * @param list<string> $serviceUuids
     *
     * @return array<string, \Generated\Shared\Transfer\GlueRelationshipTransfer>
     */
    public function getServicePointRelationshipsIndexedByServiceUuids(array $serviceUuids): array;
}
