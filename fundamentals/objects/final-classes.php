<?php

// abstract classes 
// abstract menthods
interface PaymentProcessor
{
    public function processPayment(float|int $amount): bool;
    public function refundPayment(float|int $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor
{
    public function __construct(
        protected readonly string $apiKey,
    ) {
    }
    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float $amount): bool;
    abstract protected function executeRefund(float $amount): bool;

    public function processPayment(float|int $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalide Api Key");
        }
        return $this->executePayment($amount);
    }
    public function refundPayment(float|int $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalide Api Key");
        }
        return $this->executeRefund($amount);
    }
}


class OrderProcessor
{
    public function __construct(private PaymentProcessor $paymentProcessor)
    {
    }
}

final class StripeProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }
    public function executePayment(float $amount): bool
    {
        echo "Processing payment of Stripe of $amount\n";
        return true;
    }
    public function executeRefund(float $amount): bool
    {
        echo "Processing refund of Stripe of $amount\n";
        return true;
    }
}

final class PaypalProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strlen($this->apiKey) === 32;
    }
    public function executePayment(float $amount): bool
    {
        echo "Processing payment of Paypal of $amount\n";
        return true;
    }
    public function executeRefund(float $amount): bool
    {
        echo "Processing refund of Paypal of $amount\n";
        return true;
    }
}

$processor = new StripeProcessor("sk_");
$processor->processPayment(500);

class CashPaymentProcessor implements PaymentProcessor
{
    public function processPayment(float|int $amount): bool
    {
        echo "Cash ... $amount";
        return true;
    }
    public function refundPayment(float|int $amount): bool
    {
        echo "Cash refund ... $amount";
        return true;
    }
}