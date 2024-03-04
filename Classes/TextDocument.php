<?php



use Interfaces\WriteableInterface;
use Interfaces\ReadableInterface;
use Interfaces\DocumentInterface;

class TextDocument implements DocumentInterface, ReadableInterface, WriteableInterface
{
    protected $name;
    protected $fileExtension = "txt";
    protected $data;

    public function getData(): string
    {
        return $this->data;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getFileType(): string
    {
        return $this->fileExtension;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function read($path): string
    {
        $fileContent = file_get_contents($path); 
        if ($fileContent !== false) {
            $this->setData($fileContent); 
            return $fileContent; 
        } else {
            return "Error Can't Read From The File";
        }
    }

    public function write(string $content): void
    {
        $this->setData($content); 
    }

    public function save(): void
    {
        $path = '/SavedFiles/'.$this->getName().'.'.$this->getFileType();
        $result = file_put_contents($path, $this->getData()); // كتابة المحتوى إلى الملف
        if ($result !== false) {
            echo "File Saved Succssefuly to "." $path";
        } else {
            echo "Error Can't save The File";
        }
    }
}
