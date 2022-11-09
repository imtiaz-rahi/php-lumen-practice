<?php

namespace App\Providers;

class ChannelServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(AbcChannelHandler::class)
            ->needs(PaymentInterface::class)
            ->give(PaypalService::class);

        $this->app->when(PaypalController::class)
            ->needs(PaymentInterface::class)
            ->give(PaypalService::class);

        $this->app->when(StripeController::class)
            ->needs(PaymentInterface::class)
            ->give(StripeService::class);

        $this->app->when(SquarePayController::class)
            ->needs(PaymentInterface::class)
            ->give(SquarePayService::class);
{

}
