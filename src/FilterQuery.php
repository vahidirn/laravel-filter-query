<?php

namespace VahidIrn\FilterQuery;

class FilterQuery
{
    const EQ = 'EQ'; // equal to
    const LIKE = 'LIKE'; // SQL like
    const ILIKE = 'ILIKE'; // case-insensitive like
    const MATCH = 'MATCH'; // glob matching
    const MIN = 'MIN'; // greater than or equal to
    const MAX = 'MAX'; // less than or equal to
    const LT = 'LT'; // less than
    const GT = 'GT'; // greater than
    const RE = 'RE'; // regular expression match
    const FT = 'FT'; // full text search
    const IN = 'IN'; // list contains
    const NULL = 'NULL'; // is null
    
    const String = Type\StringType::class;
    const Text = Type\TextType::class;
    const Integer = Type\IntegerType::class;
    const Numeric = Type\NumericType::class;
    const Enum = Type\EnumType::class;
    const Date = Type\DateType::class;
    const Boolean = Type\BooleanType::class;

    static function isFilterQueryType($class) {
        return is_string($class) && class_exists($class) && in_array(FilterQueryType::class, class_implements($class));
    }
}
