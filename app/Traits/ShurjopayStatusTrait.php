<?php

namespace App\Traits;

/**
 * Status codes and messages used in shurjoPay payment engine system. <br>
 * All shurjoPay status codes related to transaction handling, refund,
 * settlement, channel communications are defined in shurjopay_constants.php
 * which is loaded via composer autoload facility in composer.json.
 *
 * Use the sp_status_message(int) and/or sp_status_slug(int) functions to
 * get related message or slug to show or return in response.
 *
 * @author Imtiaz Rahi
 * @since 2022-11-15
 * @see app/shurjopay_constants.php
 */
trait ShurjopayStatusTrait
{
    /** Messages for each shurjoPay status code constants returned as associative array */
    // TODO message of few status code missing. Swapnil must finish.
    public function SP_STATUS_MESSAGES(): array
    {
        return [
            SP_TX_SUCCESS => ["Transaction Successful", 'success'],
            SP_REFUND_REQUESTED => ["Refund Requested", "refund_requested"],
            SP_REFUND_ACCEPTED => ["Refund Accepted", "refund_accepted"],
            SP_REFUND_CANCELLED => ["Refund Cancelled", "refund_cancel"],
            SP_REFUND_DONE => ["Refund Done", "refund_done"],
            SP_REFUND_DISBURSED => ["Refund Disbursed to consumer", "refund_disbursed"],
            SP_REFUND_SCRAP => ["Refund Cancelled or Scrapped", "refund_scrapped"],
        ];
    }

    /**
     * Message for appropriate status codes (constants) to be sent in
     * response to client applications or UI.
     *
     * @param int $stat Status constant
     * @return string Status message (string)
     * @see SP_STATUS_MESSAGES
     */
    public function sp_status_message(int $stat): string
    {
        return $this->SP_STATUS_MESSAGES()[$stat][0];
    }

    /**
     * Status code or slug appropriate to use in DB store or any API client response.
     *
     * @param int $stat Status constant
     * @return string Status slug (string)
     * @see SP_STATUS_MESSAGES
     */
    public function sp_status_slug(int $stat): string
    {
        return $this->SP_STATUS_MESSAGES()[$stat][1];
    }
}
