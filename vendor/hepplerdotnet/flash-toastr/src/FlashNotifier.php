<?php

namespace HepplerDotNet\FlashToastr;

use \Illuminate\Support\Facades\Session;

class FlashNotifier
{
    /**
     * The messages collection.
     *
     * @var \Illuminate\Support\Collection
     */
    public $messages;

    /**
     * Create a new FlashNotifier instance.
     *
     */
    public function __construct()
    {
        $this->messages = collect();
    }
    
    /**
     * Flash a Toastr information message.
     *
     * @param string $message
     *
     * @return $this
     */
    public function info($title, $message)
    {
        $this->push($title, $message, 'info');

        return $this;
    }

    /**
     * Flash a Toastr success message.
     *
     * @param string $message
     *
     * @return $this
     */
    public function success($title, $message)
    {
        $this->push($title, $message, 'success');

        return $this;
    }

    /**
     * Flash a Toastr error message.
     *
     * @param string $message
     *
     * @return $this
     */
    public function error($title, $message)
    {
        $this->push($title, $message, 'error');

        return $this;
    }

    /**
     * Flash a Toastr warning message.
     *
     * @param string $message
     *
     * @return $this
     */
    public function warning($title, $message)
    {
        $this->push($title, $message, 'warning');

        return $this;
    }

    /**
     * Push a Toastr Notification to the messages array.
     *
     * @param string $message
     * @param string $title
     * @param string $level   (info|success|warning|error)
     *
     * @return $this
     */
    protected function push($title, $message, $level = 'info')
    {
        $message = new Message(compact('title', 'message', 'level'));
        $this->messages->push($message);
        return $this->flash();
    }
     /**
     * Flash all messages to the session.
     */
    protected function flash()
    {
        Session::flash('flash_notification', $this->messages);
        return $this;
    }
}
