/*
* This is the main JavaScript used by webpack to build the the app.js file.
*/
import 'boxicons'
import Alpine from 'alpinejs'
import Clipboard from "@ryangjchandler/alpine-clipboard"

Alpine.plugin(Clipboard)

window.Alpine = Alpine
window.Alpine.start()
