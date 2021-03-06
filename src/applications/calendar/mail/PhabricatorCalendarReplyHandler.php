<?php

final class PhabricatorCalendarReplyHandler
  extends PhabricatorApplicationTransactionReplyHandler {

  public function validateMailReceiver($mail_receiver) {
    if (!($mail_receiver instanceof PhabricatorCalendarEvent)) {
      throw new Exception('Mail receiver is not a PhabricatorCalendarEvent!');
    }
  }

  public function getObjectPrefix() {
    return 'E';
  }
}
