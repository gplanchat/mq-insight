<?php

namespace Okvpn\Bundle\MQInsightBundle\Model\Provider;

class NullQueueProvider implements QueueProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function queueCount()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getApproxQueueCount()
    {
        return 0;
    }
}
