<?php

if (! function_exists('flash')) {

    /**
     * Arrange for a flashr message.
     *
     * @param  string|null $title
     * @param  string|null $message
     * @param  string|null $level
     * @return \HepplerDotNet\FlashToastr\FlashNotifier
     */
    function flash($title=null, $message = null, $level=null)
    {
        $notifier = app('flash');

        if (! is_null($message)) {
            return $notifier->push($title, $message, $level);
        }

        return $notifier;
    }
}
