function confirmDelete(name) {
  var resp = confirm(name);
  if (resp == true) {
    return true;
  } else {
    return false;
  }
}
