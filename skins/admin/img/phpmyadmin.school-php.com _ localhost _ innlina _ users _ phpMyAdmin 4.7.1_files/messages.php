var PMA_messages = new Array();
PMA_messages['strConfirm'] = "Подтвердить";
PMA_messages['strDoYouReally'] = "Вы действительно хотите выполнить запрос \"%s\"?";
PMA_messages['strDropDatabaseStrongWarning'] = "База данных будет полностью УДАЛЕНА!";
PMA_messages['strDatabaseRenameToSameName'] = "Cannot rename database to the same name. Change the name and try again";
PMA_messages['strDropTableStrongWarning'] = "Таблица будет полностью УДАЛЕНА!";
PMA_messages['strTruncateTableStrongWarning'] = "Таблица будет полностью ОЧИЩЕНА от данных!";
PMA_messages['strDeleteTrackingData'] = "Удалить данные слежения за таблицей?";
PMA_messages['strDeleteTrackingDataMultiple'] = "Удалить данные слежения за таблицами?";
PMA_messages['strDeleteTrackingVersion'] = "Удалить данные слежения для этой версии?";
PMA_messages['strDeleteTrackingVersionMultiple'] = "Удалить данные слежения для этих версий?";
PMA_messages['strDeletingTrackingEntry'] = "Удалить данные из отчета слежения?";
PMA_messages['strDeletingTrackingData'] = "Удаление данных слежения";
PMA_messages['strDroppingPrimaryKeyIndex'] = "Удаление первичного ключа/индекса";
PMA_messages['strDroppingForeignKey'] = "Удаление внешнего ключа.";
PMA_messages['strOperationTakesLongTime'] = "Выполнение данной операции может занять длительное время. Продолжить?";
PMA_messages['strDropUserGroupWarning'] = "Вы действительно хотите удалить группу пользователей \"%s\"?";
PMA_messages['strConfirmDeleteQBESearch'] = "Вы действительно хотите удалить поиск \"%s\"?";
PMA_messages['strConfirmNavigation'] = "У вас есть несохранённые изменения; вы уверены, что хотите покинуть данную страницу?";
PMA_messages['strDropUserWarning'] = "Вы действительно хотите отозвать выбранного(ых) пользователя(ей)?";
PMA_messages['strDeleteCentralColumnWarning'] = "Вы действительно хотите удалить эту центральную колонку?";
PMA_messages['strDropRTEitems'] = "Вы действительно хотите удалить выбранные элементы?";
PMA_messages['strDropPartitionWarning'] = "Вы действительно хотите РАЗРУШИТЬ выбранный(е) раздел(ы)? Это также УДАЛИТ данные, относящиеся к выбранному(ым) разделу(ам)!";
PMA_messages['strTruncatePartitionWarning'] = "Вы действительно хотите ОЧИСТИТЬ выбранный(е) раздел(ы)?";
PMA_messages['strRemovePartitioningWarning'] = "Вы действительно хотите удалить выбранный(е) раздел(ы)?";
PMA_messages['strResetSlaveWarning'] = "Вы действительно хотите СБРОСИТЬ ПОДЧИНЕННЫЙ СЕРВЕР?";
PMA_messages['strChangeColumnCollation'] = "Данная операция выполнит попытку конвертировать ваши данные в новую сверку. В редких случаях, особенно, когда символ не существует, данный процесс может привести к неправильному отображению данных в новой сверке; в таких случаях мы рекомендуем вернуться к изначальной сверке и ссылаться на подсказки в <a href=\"%s\" target=\"garbled_data_wiki\">Искаженные данные</a>.<br/><br/>Вы уверены, что хотите изменить сверку и конвертировать данные?";
PMA_messages['strChangeAllColumnCollationsWarning'] = "С помощью этой операции, MySQL пытается сопоставить значения данных между различными параметрами сравнения. Если наборы символов несовместимы, может произойти потеря данных и утерянные данные <b>НЕ</b> смогут быть восстановлены посредством обратного изменения сравнения колонки. <b>Чтобы конвертировать существующие данные, рекомендуется использовать возможность редактировать колонку(и) (ссылка \"Изменить\") на странице структуры таблицы.</b><br/><br/>Вы уверены, что хотите изменить сверки колонок и конвертировать данные?";
PMA_messages['strSaveAndClose'] = "Сохранить и Закрыть";
PMA_messages['strReset'] = "Сбросить";
PMA_messages['strResetAll'] = "Сбросить всё";
PMA_messages['strFormEmpty'] = "Пустые поля формы!";
PMA_messages['strRadioUnchecked'] = "Выберите хотя бы одну опцию!";
PMA_messages['strEnterValidNumber'] = "Пожалуйста, введите правильное числовое значение!";
PMA_messages['strEnterValidLength'] = "Пожалуйста, введите правильную длину!";
PMA_messages['strAddIndex'] = "Добавить индекс";
PMA_messages['strEditIndex'] = "Редактировать индекс";
PMA_messages['strAddToIndex'] = "Добавить %s столбец(ы) к индексу";
PMA_messages['strCreateSingleColumnIndex'] = "Создать индекс по одному столбцу";
PMA_messages['strCreateCompositeIndex'] = "Создать составной индекс";
PMA_messages['strCompositeWith'] = "Составной с:";
PMA_messages['strMissingColumn'] = "Пожалуйста, выберите столбец(ы) для индекса.";
PMA_messages['strLeastColumnError'] = "Необходимо добавить хотя бы одно поле.";
PMA_messages['strPreviewSQL'] = "Предпросмотр SQL";
PMA_messages['strSimulateDML'] = "Имитировать запрос";
PMA_messages['strMatchedRows'] = "Затронуто строк:";
PMA_messages['strSQLQuery'] = "SQL запрос:";
PMA_messages['strYValues'] = "Значения Y";
PMA_messages['strHostEmpty'] = "Пустое имя хоста!";
PMA_messages['strUserEmpty'] = "Пустое имя пользователя!";
PMA_messages['strPasswordEmpty'] = "Пустой пароль!";
PMA_messages['strPasswordNotSame'] = "Некорректное подтверждение пароля!";
PMA_messages['strRemovingSelectedUsers'] = "Удаление выбранных пользователей";
PMA_messages['strClose'] = "Закрыть";
PMA_messages['strTemplateCreated'] = "Шаблон создан.";
PMA_messages['strTemplateLoaded'] = "Шаблон загружен.";
PMA_messages['strTemplateUpdated'] = "Шаблон обновлен.";
PMA_messages['strTemplateDeleted'] = "Шаблон удален.";
PMA_messages['strOther'] = "Другое";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "Соединения / Процессы";
PMA_messages['strIncompatibleMonitorConfig'] = "Настройки локального монитора несовместимы!";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "Настройки вывода графиков в локальном хранилище вашего браузера больше несовместимы с новой версией диалога монитора. Высока вероятность потери работоспособности текущих настроек. Пожалуйста, сбросьте ваши настройки в меню <i>Настройки</i>.";
PMA_messages['strQueryCacheEfficiency'] = "Эффективность кэширования запросов";
PMA_messages['strQueryCacheUsage'] = "Использование кэширования запросов";
PMA_messages['strQueryCacheUsed'] = "Использован кэш запроса";
PMA_messages['strSystemCPUUsage'] = "Загрузка процессора";
PMA_messages['strSystemMemory'] = "Системная память";
PMA_messages['strSystemSwap'] = "Система подкачки";
PMA_messages['strAverageLoad'] = "Средняя загрузка";
PMA_messages['strTotalMemory'] = "Общий объём памяти";
PMA_messages['strCachedMemory'] = "Кэшированная память";
PMA_messages['strBufferedMemory'] = "Буферизованная память";
PMA_messages['strFreeMemory'] = "Свободная память";
PMA_messages['strUsedMemory'] = "Использованная память";
PMA_messages['strTotalSwap'] = "Всего области подкачки";
PMA_messages['strCachedSwap'] = "Кэшировано области подкачки";
PMA_messages['strUsedSwap'] = "Использовано области подкачки";
PMA_messages['strFreeSwap'] = "Свободно области подкачки";
PMA_messages['strBytesSent'] = "Отослано байт";
PMA_messages['strBytesReceived'] = "Принято байт";
PMA_messages['strConnections'] = "Соединения";
PMA_messages['strProcesses'] = "Процессы";
PMA_messages['strB'] = "Байт";
PMA_messages['strKiB'] = "КиБ";
PMA_messages['strMiB'] = "МБ";
PMA_messages['strGiB'] = "ГиБ";
PMA_messages['strTiB'] = "ТБ";
PMA_messages['strPiB'] = "ПиБ";
PMA_messages['strEiB'] = "ЭБ";
PMA_messages['strNTables'] = "%d таблиц(а)";
PMA_messages['strQuestions'] = "Вопросы";
PMA_messages['strTraffic'] = "Трафик";
PMA_messages['strSettings'] = "Настройки";
PMA_messages['strAddChart'] = "Добавить график к сетке";
PMA_messages['strAddOneSeriesWarning'] = "Пожалуйста, добавьте в серию хотя бы одну переменную!";
PMA_messages['strNone'] = "Ниодного";
PMA_messages['strResumeMonitor'] = "Возобновить монитор";
PMA_messages['strPauseMonitor'] = "Приостановить монитор";
PMA_messages['strStartRefresh'] = "Начать автообновление";
PMA_messages['strStopRefresh'] = "Остановить автообновление";
PMA_messages['strBothLogOn'] = "Включены переменные general_log и slow_query_log.";
PMA_messages['strGenLogOn'] = "Включена переменная general_log.";
PMA_messages['strSlowLogOn'] = "Включена переменная slow_query_log.";
PMA_messages['strBothLogOff'] = "Отключены переменные slow_query_log и general_log.";
PMA_messages['strLogOutNotTable'] = "Переменная log_output не установлена для таблицы.";
PMA_messages['strLogOutIsTable'] = "Переменная log_output установлена для таблицы.";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "Включена переменная slow_query_log, но сервером записываются только те запросы, длительность выполнения которых превышает %d секунд. Советуем установить переменную long_query_time на 0-2 секунды, в зависимости от вашей системы.";
PMA_messages['strLongQueryTimeSet'] = "Переменная long_query_time установлена в %d секунд.";
PMA_messages['strSettingsAppliedGlobal'] = "Следующие настройки будут приняты глобально и сбросятся в изначальное состояние при перезагрузке сервера:";
PMA_messages['strSetLogOutput'] = "Установить log_output в %s";
PMA_messages['strEnableVar'] = "Включить %s";
PMA_messages['strDisableVar'] = "Отключить %s";
PMA_messages['setSetLongQueryTime'] = "Установить long_query_time в %d секунд.";
PMA_messages['strNoSuperUser'] = "Вы не можете изменить значения данных переменных. Пожалуйста, войдите под учетной записью root или свяжитесь с администратором базы данных.";
PMA_messages['strChangeSettings'] = "Изменить настройки";
PMA_messages['strCurrentSettings'] = "Текущие настройки";
PMA_messages['strChartTitle'] = "Заголовок графика";
PMA_messages['strDifferential'] = "Различия";
PMA_messages['strDividedBy'] = "Разделено на %s";
PMA_messages['strUnit'] = "Единица";
PMA_messages['strFromSlowLog'] = "Из журнала медленных запросов";
PMA_messages['strFromGeneralLog'] = "Из основного журнала";
PMA_messages['strServerLogError'] = "Имя базы данных неизвестно данному запросу в журнале сервера.";
PMA_messages['strAnalysingLogsTitle'] = "Анализ журналов";
PMA_messages['strAnalysingLogs'] = "Анализ и загрузка журналов. Ждите, может занять какое-то время.";
PMA_messages['strCancelRequest'] = "Отменить запрос";
PMA_messages['strCountColumnExplanation'] = "Данный столбец показывает количество сгруппированных вместе идентичных запросов. Однако, в качестве критерия группировки используется только сам SQL запрос, таким образом другие атрибуты запросов, как время запуска, могут отличаться.";
PMA_messages['strMoreCountColumnExplanation'] = "Поскольку была выбрана группировка INSERT запросов, INSERT запросы одной и той же таблицы так же группируются вместе, в независимости от заносимых данных.";
PMA_messages['strLogDataLoaded'] = "Данные журналов загружены. Запросы, выполненные в данный промежуток времени:";
PMA_messages['strJumpToTable'] = "Перейти к таблице журнала";
PMA_messages['strNoDataFoundTitle'] = "Данные не найдены";
PMA_messages['strNoDataFound'] = "Анализ журнала пройден, но данные за выбранный промежуток времени не найдены.";
PMA_messages['strAnalyzing'] = "Анализ…";
PMA_messages['strExplainOutput'] = "Анализ результатов";
PMA_messages['strStatus'] = "Состояние";
PMA_messages['strTime'] = "Время";
PMA_messages['strTotalTime'] = "Полное время:";
PMA_messages['strProfilingResults'] = "Профилирование результатов";
PMA_messages['strTable'] = "Таблица";
PMA_messages['strChart'] = "График";
PMA_messages['strFiltersForLogTable'] = "Параметры фильтра таблицы журнала";
PMA_messages['strFilter'] = "Фильтр";
PMA_messages['strFilterByWordRegexp'] = "Фильтровать запросы по строке либо регулярному выражению:";
PMA_messages['strIgnoreWhereAndGroup'] = "Группировать запросы, игнорируя данные переменных в условии WHERE";
PMA_messages['strSumRows'] = "Сумма сгруппированных строк:";
PMA_messages['strTotal'] = "Всего:";
PMA_messages['strLoadingLogs'] = "Загрузка журналов";
PMA_messages['strRefreshFailed'] = "Обновление монитора завершилось ошибкой";
PMA_messages['strInvalidResponseExplanation'] = "При запросе новых данных графика сервер вернул некорректный ответ. Причиной может быть истекшая сессия. Перезагрузка страницы и последующий ввод данных учётной записи должны решить проблему.";
PMA_messages['strReloadPage'] = "Перезагрузить страницу";
PMA_messages['strAffectedRows'] = "Затронуто строк:";
PMA_messages['strFailedParsingConfig'] = "Ошибка при разборе конфигурационного файла. Некорректный код JSON.";
PMA_messages['strFailedBuildingGrid'] = "Ошибка построения сетки графика из импортированной конфигурации. Сброшено на изначальную конфигурацию…";
PMA_messages['strImport'] = "Импорт";
PMA_messages['strImportDialogTitle'] = "Импорт настроек монитора";
PMA_messages['strImportDialogMessage'] = "Пожалуйста, выберите файл, который хотите импортировать.";
PMA_messages['strNoImportFile'] = "На сервере нет доступных для импорта файлов!";
PMA_messages['strAnalyzeQuery'] = "Анализировать запрос";
PMA_messages['strAdvisorSystem'] = "Системный советник";
PMA_messages['strPerformanceIssues'] = "Возможные проблемы производительности";
PMA_messages['strIssuse'] = "Проблема";
PMA_messages['strRecommendation'] = "Рекомендация";
PMA_messages['strRuleDetails'] = "Подробности правила";
PMA_messages['strJustification'] = "Обоснование";
PMA_messages['strFormula'] = "Использованная переменная / формула";
PMA_messages['strTest'] = "Тест";
PMA_messages['strFormatting'] = "Форматирование SQL…";
PMA_messages['strNoParam'] = "Параметры не найдены!";
PMA_messages['strGo'] = "Вперёд";
PMA_messages['strCancel'] = "Отменить";
PMA_messages['strPageSettings'] = "Настройки, касающиеся страницы";
PMA_messages['strApply'] = "Применить";
PMA_messages['strLoading'] = "Загрузка…";
PMA_messages['strAbortedRequest'] = "Запрос отменён!";
PMA_messages['strProcessingRequest'] = "Обработка запроса";
PMA_messages['strRequestFailed'] = "Запрос не выполнен!";
PMA_messages['strErrorProcessingRequest'] = "Ошибка при обработке запроса";
PMA_messages['strErrorCode'] = "Код ошибки: %s";
PMA_messages['strErrorText'] = "Текст ошибки: %s";
PMA_messages['strNoDatabasesSelected'] = "Ни одна база данных не выбрана.";
PMA_messages['strDroppingColumn'] = "Удаление столбца";
PMA_messages['strAddingPrimaryKey'] = "Добавление первичного ключа";
PMA_messages['strOK'] = "OK";
PMA_messages['strDismiss'] = "Кликните для сокрытия данного уведомления";
PMA_messages['strRenamingDatabases'] = "Переименование баз данных";
PMA_messages['strCopyingDatabase'] = "Копирование базы данных";
PMA_messages['strChangingCharset'] = "Смена кодировки";
PMA_messages['strNo'] = "Нет";
PMA_messages['strForeignKeyCheck'] = "Включить проверку внешних ключей";
PMA_messages['strErrorRealRowCount'] = "Не удалось получить реальное количество строк.";
PMA_messages['strSearching'] = "Поиск";
PMA_messages['strHideSearchResults'] = "Скрыть результаты поиска";
PMA_messages['strShowSearchResults'] = "Отобразить результаты поиска";
PMA_messages['strBrowsing'] = "Просмотр";
PMA_messages['strDeleting'] = "Удаление";
PMA_messages['strConfirmDeleteResults'] = "Удалить соответствия для таблицы %s?";
PMA_messages['MissingReturn'] = "Определение хранимой функции должно содержать выражение RETURN!";
PMA_messages['strExport'] = "Экспорт";
PMA_messages['NoExportable'] = "No routine is exportable. Required privileges may be lacking.";
PMA_messages['enum_editor'] = "Редактор ENUM/SET";
PMA_messages['enum_columnVals'] = "Значения для столбца %s";
PMA_messages['enum_newColumnVals'] = "Значения для новых столбцов";
PMA_messages['enum_hint'] = "Вставьте каждое значение в отдельное поле.";
PMA_messages['enum_addValue'] = "Добавить %d значение(й)";
PMA_messages['strImportCSV'] = "Замечание: если файл содержит множество таблиц, они будут объединены в одну.";
PMA_messages['strHideQueryBox'] = "Скрыть поле запроса";
PMA_messages['strShowQueryBox'] = "Отобразить поле запроса";
PMA_messages['strEdit'] = "Изменить";
PMA_messages['strDelete'] = "Удалить";
PMA_messages['strNotValidRowNumber'] = "Число %d не является правильным номером строки.";
PMA_messages['strBrowseForeignValues'] = "Обзор внешних значений";
PMA_messages['strNoAutoSavedQuery'] = "Нет автосохраненных запросов";
PMA_messages['strBookmarkVariable'] = "Переменная %d:";
PMA_messages['pickColumn'] = "Выбрать";
PMA_messages['pickColumnTitle'] = "Селектор столбца";
PMA_messages['searchList'] = "Искать в списке";
PMA_messages['strEmptyCentralList'] = "Нет столбцов в центральном списке. Убедитесь, что центральный список столбцов для базы данных %s имеет столбцы, которые не присутствуют в текущей таблице.";
PMA_messages['seeMore'] = "Больше информации";
PMA_messages['confirmTitle'] = "Вы уверены?";
PMA_messages['makeConsistentMessage'] = "Это действие может изменить некоторые определения столбцов.<br/>Вы уверены, что хотите продолжить?";
PMA_messages['strContinue'] = "Продолжить";
PMA_messages['strAddPrimaryKey'] = "Добавить первичный ключ";
PMA_messages['strPrimaryKeyAdded'] = "Добавлен первичный ключ.";
PMA_messages['strToNextStep'] = "Переход к следующему шагу…";
PMA_messages['strFinishMsg'] = "Первый этап нормализации таблицы \'%s\' завершён.";
PMA_messages['strEndStep'] = "Конец шага";
PMA_messages['str2NFNormalization'] = "Второй этап нормализации (2NF)";
PMA_messages['strDone'] = "Готово";
PMA_messages['strConfirmPd'] = "Подтвердите частичные зависимости";
PMA_messages['strSelectedPd'] = "Выбранные частичные зависимости показаны ниже:";
PMA_messages['strPdHintNote'] = "Примечание: a, b -> d, f подразумевает, что значения столбцов a и b при объединении вместе могут определить значения столбца d и столбца f.";
PMA_messages['strNoPdSelected'] = "Не выбраны зависимости!";
PMA_messages['strBack'] = "Назад";
PMA_messages['strShowPossiblePd'] = "Покажите мне возможные частичные зависимости на основе данных в таблице";
PMA_messages['strHidePd'] = "Скрыть список частичных зависимостей";
PMA_messages['strWaitForPd'] = "Подождите, пожалуйста! Это может занять несколько секунд, в зависимости от объёма данных и количества столбцов таблицы.";
PMA_messages['strStep'] = "Шаг";
PMA_messages['strMoveRepeatingGroup'] = "<ol><b>Выполнены следующие действия:</b><li>DROP столбцов %s в таблице %s</li><li>Создать следующую таблицу</li>";
PMA_messages['strNewTablePlaceholder'] = "Enter new table name";
PMA_messages['strNewColumnPlaceholder'] = "Enter column name";
PMA_messages['str3NFNormalization'] = "Третий этап нормализации (3NF)";
PMA_messages['strConfirmTd'] = "Подтвердите транзитивные зависимости";
PMA_messages['strSelectedTd'] = "Выбранные зависимости показаны ниже:";
PMA_messages['strNoTdSelected'] = "Не выбраны зависимости!";
PMA_messages['strSave'] = "Сохранить";
PMA_messages['strHideSearchCriteria'] = "Скрыть параметры поиска";
PMA_messages['strShowSearchCriteria'] = "Отобразить параметры поиска";
PMA_messages['strRangeSearch'] = "Поиск в диапазоне";
PMA_messages['strColumnMax'] = "Максимум в столбце:";
PMA_messages['strColumnMin'] = "Минимум в столбце:";
PMA_messages['strMinValue'] = "Минимальное значение:";
PMA_messages['strMaxValue'] = "Максимальное значение:";
PMA_messages['strHideFindNReplaceCriteria'] = "Скрыть параметры поиска и замены";
PMA_messages['strShowFindNReplaceCriteria'] = "Отобразить параметры поиска и замены";
PMA_messages['strDisplayHelp'] = "<ul><li>Каждая точка представляет строку данных.</li><li>Удержание курсора над точкой отобразит ее название.</li><li>Для увеличения, выберите часть диаграммы мышкой.</li><li>Кликните ссылку сброса увеличения для возвращения к исходному состоянию.</li><li>Кликните точку данных для просмотра или редактирования строки данных.</li><li>Можно изменить размер участка перетащив его вдоль нижнего правого угла.</li></ul>";
PMA_messages['strHelpTitle'] = "Zoom search instructions";
PMA_messages['strInputNull'] = "<strong>Выберите два столбца</strong>";
PMA_messages['strSameInputs'] = "<strong>Выберите два различных столбца</strong>";
PMA_messages['strDataPointContent'] = "Содержание точки данных";
PMA_messages['strIgnore'] = "Игнорировать";
PMA_messages['strCopy'] = "Копировать";
PMA_messages['strX'] = "X";
PMA_messages['strY'] = "Y";
PMA_messages['strPoint'] = "Точка";
PMA_messages['strPointN'] = "Точка %d";
PMA_messages['strLineString'] = "Линия";
PMA_messages['strPolygon'] = "Многоугольник";
PMA_messages['strGeometry'] = "Геометрия";
PMA_messages['strInnerRing'] = "Внутренний контур";
PMA_messages['strOuterRing'] = "Внешний контур";
PMA_messages['strAddPoint'] = "Добавить точку";
PMA_messages['strAddInnerRing'] = "Добавить внутренний контур";
PMA_messages['strYes'] = "Да";
PMA_messages['strCopyEncryptionKey'] = "Вы хотите скопировать ключ шифрования?";
PMA_messages['strEncryptionKey'] = "Ключ шифрования";
PMA_messages['strMysqlAllowedValuesTipTime'] = "MySQL accepts additional values not selectable by the slider; key in those values directly if desired";
PMA_messages['strMysqlAllowedValuesTipDate'] = "MySQL accepts additional values not selectable by the datepicker; key in those values directly if desired";
PMA_messages['strLockToolTip'] = "Показывает, что были произведены изменения на странице. Для отмены изменений потребуется подтверждение";
PMA_messages['strSelectReferencedKey'] = "Выберите ссылочный ключ";
PMA_messages['strSelectForeignKey'] = "Выберите внешний ключ";
PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "Выберите поле основного индекса (PRIMARY) или уникального индекса!";
PMA_messages['strChangeDisplay'] = "Выбор отображаемого столбца";
PMA_messages['strLeavingDesigner'] = "Вы не сохранили изменения в раскладке. Без сохранения, они будут потеряны. Продолжить?";
PMA_messages['strPageName'] = "Название страницы";
PMA_messages['strSavePage'] = "Сохранить страницу";
PMA_messages['strSavePageAs'] = "Сохранить страницу как";
PMA_messages['strOpenPage'] = "Открыть страницу";
PMA_messages['strDeletePage'] = "Удалить страницу";
PMA_messages['strUntitled'] = "Без названия";
PMA_messages['strSelectPage'] = "Выберите следующую страницу";
PMA_messages['strEnterValidPageName'] = "Введите правильное имя страницы";
PMA_messages['strLeavingPage'] = "Вы хотите записать изменения на текущую страницу?";
PMA_messages['strSuccessfulPageDelete'] = "Страница успешно удалена";
PMA_messages['strExportRelationalSchema'] = "Экспорт схемы связей";
PMA_messages['strModificationSaved'] = "Изменения сохранены";
PMA_messages['strAddOption'] = "Добавить параметр для столбца \"%s\".";
PMA_messages['strObjectsCreated'] = "создано %d объект(ов).";
PMA_messages['strSubmit'] = "Выполнить";
PMA_messages['strCellEditHint'] = "Для отмены редактирования нажмите Esc.";
PMA_messages['strSaveCellWarning'] = "Вы отредактировали некоторые данные, но изменения не были сохранены. Вы уверены, что хотите покинуть данную страницу без сохранения данных?";
PMA_messages['strColOrderHint'] = "Перетяните для изменения порядка сортировки.";
PMA_messages['strSortHint'] = "Кликните для сортировки результатов по данному столбцу.";
PMA_messages['strMultiSortHint'] = "Удерживая Shift, кликните для добавления столбца в класс ORDER BY или переключения ASC/DESC.<br />- Удерживая Ctrl или Alt (для Mac: удерживая Shift и Option), кликните для удаления столбца из класса ORDER BY";
PMA_messages['strColMarkHint'] = "Кликните для установки/снятия отметки.";
PMA_messages['strColNameCopyHint'] = "Кликните дважды для копирования имени столбца.";
PMA_messages['strColVisibHint'] = "Кликните выпадающую стрелку<br />для переключения видимости столбца.";
PMA_messages['strShowAllCol'] = "Показать все";
PMA_messages['strAlertNonUnique'] = "Данная таблица не содержит уникального поля, в связи с чем, после сохранения могут не работать функции связанные с редактированием сетки, выставления галочки, ссылки редактирования, копирования и удаления.";
PMA_messages['strEnterValidHex'] = "Пожалуйста, введите допустимую шестнадцатеричную строку. Допустимыми знаками являются 0-9, A-F.";
PMA_messages['strShowAllRowsWarning'] = "Вы действительно хотите отобразить все строки? При большом количестве данных возможно отключение браузера.";
PMA_messages['strOriginalLength'] = "Исходный размер";
PMA_messages['dropImportMessageCancel'] = "Отмена";
PMA_messages['dropImportMessageAborted'] = "Прервано";
PMA_messages['dropImportMessageFailed'] = "Ошибка";
PMA_messages['dropImportMessageSuccess'] = "Успех";
PMA_messages['dropImportImportResultHeader'] = "Импортировать состояние";
PMA_messages['dropImportDropFiles'] = "Перетащите файлы сюда";
PMA_messages['dropImportSelectDB'] = "Выберите базу данных";
PMA_messages['print'] = "Печать";
PMA_messages['back'] = "Назад";
PMA_messages['strGridEditFeatureHint'] = "Большинство значений можно отредактировать<br />дважды кликнув прямо на них.";
PMA_messages['strGoToLink'] = "Перейти к ссылке:";
PMA_messages['strColNameCopyTitle'] = "Скопировать имя столбца.";
PMA_messages['strColNameCopyText'] = "Для копирования имени столбца в буфер обмена, сделайте щелчок правой кнопкой мышки.";
PMA_messages['strGeneratePassword'] = "Создать пароль";
PMA_messages['strGenerate'] = "Генерировать";
PMA_messages['strChangePassword'] = "Изменить пароль";
PMA_messages['strMore'] = "Ещё";
PMA_messages['strShowPanel'] = "Раскрыть панель";
PMA_messages['strHidePanel'] = "Скрыть панель";
PMA_messages['strUnhideNavItem'] = "Отображать скрытые пункты дерева навигации.";
PMA_messages['linkWithMain'] = "Связать с главной панелью";
PMA_messages['unlinkWithMain'] = "Отсоединить от основной панели";
PMA_messages['strInvalidPage'] = "Запрошенная страница не найдена в истории, возможно, истекло время ее хранения.";
PMA_messages['strNewerVersion'] = "Доступна более новая версия phpMyAdmin и вам предлагается ее использовать. Новейшая версия %s, выпущена %s.";
PMA_messages['strLatestAvailable'] = ", последняя стабильная версия:";
PMA_messages['strUpToDate'] = "актуально";
PMA_messages['strCreateView'] = "Создать представление";
PMA_messages['strSendErrorReport'] = "Отправить отчёт об ошибках";
PMA_messages['strSubmitErrorReport'] = "Отправить отчёт об ошибке";
PMA_messages['strErrorOccurred'] = "Произошла фатальная ошибка JavaScript. Вы хотите отправить отчёт об ошибке?";
PMA_messages['strChangeReportSettings'] = "Изменить настройки отчёта";
PMA_messages['strShowReportDetails'] = "Показать детали отчёта";
PMA_messages['strTimeOutError'] = "Ваш экспорт незавершён из-за ограничений времени выполнения на уровне PHP!";
PMA_messages['strTooManyInputs'] = "Предупреждение: форма на данной странице имеет более %d полей. Некоторые поля могут быть проигнорированы согласно значения переменной max_input_vars в PHP.";
PMA_messages['phpErrorsFound'] = "<div class=\"error\">На сервере обнаружены некоторые ошибки!<br/>Пожалуйста, посмотрите вниз текущего окна.<div><input id=\"pma_ignore_errors_popup\" type=\"submit\" value=\"Игнорировать\" class=\"floatright\" style=\"margin-top: 20px;\"><input id=\"pma_ignore_all_errors_popup\" type=\"submit\" value=\"Игнорировать всё\" class=\"floatright\" style=\"margin-top: 20px;\"></div></div>";
PMA_messages['phpErrorsBeingSubmitted'] = "<div class=\"error\">На сервере обнаружены некоторые ошибки!<br/>В соответствии с вашими настройками они заносятся в данное время, подождите, пожалуйста.<br/><img src=\"./themes/pmahomme/img/ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\"/></div>";
PMA_messages['strConsoleRequeryConfirm'] = "Выполнить запрос ещё раз?";
PMA_messages['strConsoleDeleteBookmarkConfirm'] = "Вы действительно хотите удалить эту закладку?";
PMA_messages['strConsoleDebugError'] = "В процессе получения информации по отладке SQL произошла ошибка.";
PMA_messages['strConsoleDebugSummary'] = "%s запрос(ов) выполнено %s раз(а) за %s секунд(у/ы).";
PMA_messages['strConsoleDebugArgsSummary'] = "%s аргумент(ов/а) передано";
PMA_messages['strConsoleDebugShowArgs'] = "Отобразить аргументы";
PMA_messages['strConsoleDebugHideArgs'] = "Скрыть аргументы";
PMA_messages['strConsoleDebugTimeTaken'] = "Занято времени:";
PMA_messages['strNoLocalStorage'] = "Обнаружена проблема доступности хранилища вашего браузера, некоторые возможности могут некорректно работать. Возможно браузер не поддерживает хранилище, или исчерпан его лимит. В Firefox, неисправное хранилище так же может вызывать данную проблему, очистка в разделе \"Автономное веб-содержимое и данные пользователя\" может ее решить. В Safari, данную проблему обычно вызывает установка \"Режим частного доступа\".";
PMA_messages['strCopyTablesTo'] = "Скопировать таблицы в";
PMA_messages['strAddPrefix'] = "Добавить префикс таблицы";
PMA_messages['strReplacePrefix'] = "Replace table with prefix";
PMA_messages['strCopyPrefix'] = "Копировать таблицу с префиксом";
PMA_messages['strExtrWeak'] = "Extremely weak";
PMA_messages['strVeryWeak'] = "Very weak";
PMA_messages['strWeak'] = "Weak";
PMA_messages['strGood'] = "Good";
PMA_messages['strStrong'] = "Strong";
var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
var pmaThemeImage = './themes/pmahomme/img/';
var mysql_doc_template = './url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2F%25s.html';
var maxInputVars = 1000;
if ($.datepicker) {
$.datepicker.regional['']['closeText'] = "Готово";
$.datepicker.regional['']['prevText'] = "Предыдущий";
$.datepicker.regional['']['nextText'] = "Следующий";
$.datepicker.regional['']['currentText'] = "Сегодня";
$.datepicker.regional['']['monthNames'] = ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь",];
$.datepicker.regional['']['monthNamesShort'] = ["Янв","Фев","Мар","Апр","Май","Июн","Июл","Авг","Сен","Окт","Ноя","Дек",];
$.datepicker.regional['']['dayNames'] = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота",];
$.datepicker.regional['']['dayNamesShort'] = ["Вс","Пн","Вт","Ср","Чт","Пт","Сб",];
$.datepicker.regional['']['dayNamesMin'] = ["Вс","Пн","Вт","Ср","Чт","Пт","Сб",];
$.datepicker.regional['']['weekHeader'] = "Нед.";
$.datepicker.regional['']['showMonthAfterYear'] = false;
$.datepicker.regional['']['yearSuffix'] = "";
$.extend($.datepicker._defaults, $.datepicker.regional['']);
} /* if ($.datepicker) */

if ($.timepicker) {
$.timepicker.regional['']['timeText'] = "Время";
$.timepicker.regional['']['hourText'] = "Час";
$.timepicker.regional['']['minuteText'] = "Минута";
$.timepicker.regional['']['secondText'] = "Секунда";
$.extend($.timepicker._defaults, $.timepicker.regional['']);
} /* if ($.timepicker) */

function extendingValidatorMessages() {
$.extend($.validator.messages, {
required: "Это обязательное поле", remote: "Пожалуйста, исправьте это поле", email: "Введите правильный email", url: "Пожалуйста, введите правильный URL", date: "Введите правильную дату", dateISO: "Введите правильную дату ( ISO )", number: "Пожалуйста, введите правильное числовое значение", creditcard: "Пожалуйста, введите правильный номер кредитной карты", digits: "Пожалуйста, введите только цифровые символы", equalTo: "Введите то же значение еще раз", maxlength: $.validator.format("Пожалуйста, введите не более {0} символ(ов/а)"), minlength: $.validator.format("Пожалуйста, введите не минее {0} символ(ов/а)"), rangelength: $.validator.format("Пожалуйста, введите значение длиной между {0} и {1} символами(ом)"), range: $.validator.format("Пожалуйста, введите значение между {0} и {1} символами(ом)"), max: $.validator.format("Пожалуйста, введите значение меньшее или равное {0}"), min: $.validator.format("Пожалуйста, введите значение, большее или равное {0}"), validationFunctionForDateTime: $.validator.format("Введите правильную дату или время"), validationFunctionForHex: $.validator.format("Пожалуйста, введите правильное значение HEX"), validationFunctionForFuns: $.validator.format("Ошибка")
});
} /* if ($.validator) */