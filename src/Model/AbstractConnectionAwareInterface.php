<?php

namespace Okvpn\Bundle\MQInsightBundle\Model;

use Oro\Component\MessageQueue\Transport\ConnectionInterface;

interface AbstractConnectionAwareInterface
{
    /**
     * @param ConnectionInterface $connection
     */
    public function setConnection(ConnectionInterface $connection);
}
