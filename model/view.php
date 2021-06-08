<?php
// エスケープ処理　文字短く
function escape($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
}
