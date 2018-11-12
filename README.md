# Dependency Injection (DI)

Mit diesem Entwurfsmuster sollen Abhängigkeiten zwischen verschiedenen Objekten aufgelöst werden, was mehrere Vorteile mit sich bringt:

1. Der Wartungsaufwand und damit auch die Wartungskosten können sich deutlich verringern, da bei Änderungen innerhalb eines Objektes andere Objekte nicht auch noch angepasst werden müssen (Open-Closed-Prinzip)
2. Die Objekte werden von einer weiteren Verantwortung entbunden, indem diese selbst keine weiteren Objekte initialisieren müssen (Single-Responsibility-Prinzip)
3. Die Durchführung von Unit Tests wird deutlich vereinfacht

Vor allem in großen und komplexen Projekten sollte DI grundlegend Anwendung finden.
Es gibt drei verschiedene Möglichkeiten das Dependency Injection Entwurfsmuster anzuwenden:

1. Constructor Injection
2. Setter Injection
3. Interface Injection
Beispiele

Die 4 Varianten führen zwar alle zum gleichen Ergebnis, können jedoch, je nach Situation, einen stark abweichenden Wartungsaufwand mit sich bringen..
