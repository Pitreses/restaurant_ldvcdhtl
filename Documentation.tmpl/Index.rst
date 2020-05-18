.. ---------------------------------------------------------------
   This is the start file. It gets displayed as first page
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/GeneralConventions/DirectoryFilenames.html#supported-filenames-and-formats
   ---------------------------------------------------------------

.. ---------------------------------------------------------------
   More information about creating an extension manual:
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingDocForExtension/CreateWithExtensionBuilder.html
   ---------------------------------------------------------------

.. ---------------------------------------------------------------
   comments start with 2 dots and a blank
   they can continue on the next line
   ---------------------------------------------------------------

.. ---------------------------------------------------------------
   every .rst file should include Includes.txt
   use correct path!
   ---------------------------------------------------------------

.. include:: Includes.txt

.. ---------------------------------------------------------------
   Every manual should have a start label for cross-referencing to
   start page. Do not remove this!
   ---------------------------------------------------------------

.. _start:

.. ---------------------------------------------------------------
   This is the doctitle
   ---------------------------------------------------------------

=============================================================
Restaurant LDVCDHTL
=============================================================

:Extension Key:
    restaurant_ldvcdhtl

:Version:
    |release|

:Language:
    en

:Copyright:
    2020

:Author:
    Dilan Hassan, Valentin Carrichon, Théau Leclere, Laurie Dumery, David Jacquelin

:Email:
    dilan.hassan@etu.u-bordeaux.fr, valentin.carrichon@etu.u-bordeaux.fr, theau.leclere@etu.u-bordeaux.fr, laurie.dumery@etu.u-bordeaux.fr, david.jacquelin@etu.u-bordeaux.fr

:License:
   This extension documentation is published under the `CC BY-NC-SA 4.0 <https://creativecommons.org/licenses/by-nc-sa/4.0/>`__ (Creative Commons) license

Carte de restaurant

**TYPO3**

   The content of this document is related to TYPO3 CMS,
   a GNU/GPL CMS/Framework available from `typo3.org
   <https://typo3.org/>`_ .

**Community Documentation:**

    This documentation is community documentation for the TYPO3 extension Restaurant LDVCDHTL

    It is maintained as part of this third party extension.

    If you find an error or something is missing, please:
    `Report a Problem <https://github.com/TYPO3-Documentation/TYPO3CMS-Example-ExtensionManual/issues/new>`__

**Sitemap:**

   :ref:`sitemap`

.. ---------------------------------------------------------------
   This generates the menu
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingReST/MenuHierarchy.html
   ---------------------------------------------------------------

.. toctree::
   :maxdepth: 3
   :hidden:

   Introduction/Index
   User/Index
   Installation/Index
   Configuration/Index
   Developer/Index
   KnownProblems/Index
   ToDoList/Index
   ChangeLog/Index
   Sitemap
