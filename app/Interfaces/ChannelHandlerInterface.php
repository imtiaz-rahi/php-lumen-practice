<?php

namespace App\Interfaces;

interface ChannelHandlerInterface
{

    /**
     * Get ChannelConfig from database.
     *
     * @return ChannelConfig
     */
    public function getConfig(): ChannelConfig;

    public function getChannelAuthToken();

    public function getChannelId();
}
