<?php
  include "../src/numbers.php";

  $phrase = base64_decode('RW1vdGlvbnMsIGluIG15IGV4cGVyaWVuY2UsIGFyZW4ndCBjb3ZlcmVkIGJ5IHNpbmdsZSB3b3Jkcy4KSSBkb24ndCBiZWxpZXZlIGluICJzYWRuZXNzLCIgImpveSwiIG9yICJyZWdyZXQuIgpNYXliZSB0aGUgYmVzdCBwcm9vZiB0aGF0IHRoZSBsYW5ndWFnZSBpcyBwYXRyaWFyY2hhbCBpcyB0aGF0IGl0IG92ZXJzaW1wbGlmaWVzIGZlZWxpbmcuCkknZCBsaWtlIHRvIGhhdmUgYXQgbXkgZGlzcG9zYWwgY29tcGxpY2F0ZWQgaHlicmlkIGVtb3Rpb25zLCBHZXJtYW5pYyB0cmFpbi1jYXIgY29uc3RydWN0aW9ucyBsaWtlLCBzYXksICJ0aGUgaGFwcGluZXNzIHRoYXQgYXR0ZW5kcyBkaXNhc3Rlci4iCk9yOiAidGhlIGRpc2FwcG9pbnRtZW50IG9mIHNsZWVwaW5nIHdpdGggb25lJ3MgZmFudGFzeS4iCkknZCBsaWtlIHRvIHNob3cgaG93ICJpbnRpbWF0aW9ucyBvZiBtb3J0YWxpdHkgYnJvdWdodCBvbiBieSBhZ2luZyBmYW1pbHkgbWVtYmVycyIgY29ubmVjdHMgd2l0aCAidGhlIGhhdHJlZCBvZiBtaXJyb3JzIHRoYXQgYmVnaW5zIGluIG1pZGRsZSBhZ2UuIgpJJ2QgbGlrZSB0byBoYXZlIGEgd29yZCBmb3IgInRoZSBzYWRuZXNzIGluc3BpcmVkIGJ5IGZhaWxpbmcgcmVzdGF1cmFudHMiIGFzIHdlbGwgYXMgZm9yICJ0aGUgZXhjaXRlbWVudCBvZiBnZXR0aW5nIGEgcm9vbSB3aXRoIGEgbWluaWJhci4iCkkndmUgbmV2ZXIgaGFkIHRoZSByaWdodCB3b3JkcyB0byBkZXNjcmliZSBteSBsaWZlLCBhbmQgbm93IHRoYXQgSSd2ZSBlbnRlcmVkIG15IHN0b3J5LCBJIG5lZWQgdGhlbSBtb3JlIHRoYW4gZXZlci4g');
  $number = rand(1, 15);
  $count = 1;
  for($i = 1; $i <= $number; $i++){
    $count *= $i;
  }
  //$tests["Decodificar Morse"] = base64_decode("SGFsbG8uIFdpbGxrb21tZW4u") === morse_decode(".... .- .-.. .-.. --- .-.-.- / .-- .. .-.. .-.. -.- --- -- -- . -. .-.-.-");
  //$tests["Codificar Morse"] = base64_decode("Li4uIC4uLi4gLi0gLi0uLiAuLSAuLS4uIC4tIC4tLi4gLi0gLi0uLiAuLSAuLS4uIC4tIC4tLi4gLi0=") === morse_encode("Shalalalalalala");

  //$tests["BR"] = nl2br($phrase) === br($phrase);
?>
