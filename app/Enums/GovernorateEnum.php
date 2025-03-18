<?php

namespace App\Enums;

enum GovernorateEnum: string
{
    case Baghdad = 'بغداد';
    case Basra = 'البصرة';
    case Nineveh = 'نينوى';
    case Erbil = 'أربيل';
    case Sulaymaniyah = 'السليمانية';
    case Duhok = 'دهوك';
    case Kirkuk = 'كركوك';
    case Karbala = 'كربلاء';
    case Najaf = 'النجف';
    case Wasit = 'واسط';
    case Diyala = 'ديالى';
    case Anbar = 'الأنبار';
    case Babil = 'بابل';
    case Maysan = 'ميسان';
    case DhiQar = 'ذي قار';
    case Muthanna = 'المثنى';
    case Salahaddin = 'صلاح الدين';
    case Qadisiyyah = 'القادسية';

    // Optional: Method to return an array of all governorates
    public static function all(): array
    {
        return array_column(self::cases(), 'value', 'value');
    }
}
