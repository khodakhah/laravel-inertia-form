<?php

namespace Khodakhah\InertiaForm\Form\Enums;

enum InputType: string
{
    case TEXTARIA = 'textarea';
    case TEXT = 'text';
    case PASSWORD = 'password';
    case EMAIL = 'email';
    case NUMBER = 'number';
    case URL = 'url';
    case DATE = 'date';
    case DATETIME_LOCAL = 'datetime-local';
    case MONTH = 'month';
    case WEEK = 'week';
    case TIME = 'time';
    case SEARCH = 'search';
    case TEL = 'tel';
    case HIDDEN = 'hidden';
    case CHECKBOX = 'checkbox';
    case RADIO = 'radio';
    case SELECT = 'select';
    case DATEPIKER = 'datepiker';
}