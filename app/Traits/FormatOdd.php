<?php

namespace App\Traits;

trait FormatOdd
{
    /**
     * Formata um valor numérico para o formato esperado com ponto decimal.
     * Exemplo: '00320' -> '3.20'
     *
     * @param string $value
     * @return string
     */
    public function formatOdd(string $value): string
    {
        // Remove caracteres não numéricos
        $value = preg_replace('/[^0-9]/', '', $value);

        // Remove zeros à esquerda, mas preserva "0" para valores menores que 1
        $value = ltrim($value, '0') ?: '0';

        // Adiciona o ponto decimal no lugar correto
        if (strlen($value) === 1) {
            return '0.0' . $value;
        } elseif (strlen($value) === 2) {
            return '0.' . $value;
        } else {
            return substr($value, 0, -2) . '.' . substr($value, -2);
        }
    }
}
