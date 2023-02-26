<?php

final class Pagination 
{
    public static function generatePaginaton(
        int $amount = 9, 
        int $perPage = 2,
        int $active = 1,
        int $maxVisible = 3)
    {
        $startDiv = '<div class="pagination">';
        $endDiv = '</div>';
        $maxPage = ceil($amount/$perPage);
        $pages = '';
        $leftArrrow = '&laquo;';
        $rightArrow = '&raquo;';

        $pages .= static::wrapInTag($leftArrrow, 'a', ['arrow__left']);

        $start = 1;
        for($count = $start; $count < $maxPage; ++$count) {
            if($count == $active) {
                $pages .= static::wrapInTag($count, 'a', ['pagination-active']);
            } 
            else {
                $pages .= static::wrapInTag($count);
            }
            if($count >= $maxVisible) {
                $pages .= static::wrapInTag('...');
                break;
            }
        }
        $pages .= static::wrapInTag($maxPage);

        $pages .= static::wrapInTag($rightArrow, 'a', ['arrow__right']);

        return $startDiv . $pages . $endDiv;
    }

    // зочем я это написал T_T
    private static function wrapInTag(
        string $wrapString,
        string $wrapTagName = 'a',
        array $wrapTagClasses = [])
    {
        return  '<' . $wrapTagName . ($wrapTagClasses != [] ? (' class=' . '"'.join(' ', $wrapTagClasses) . '"') : '') . '>' . $wrapString . '</'. $wrapTagName . '>';
    }
}