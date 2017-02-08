#include <unistd.h>

void    brackets(char *str)
{
        int i;
        int j;
        char *open_brackets;

        open_brackets = str;
        i = 0;
        j = 0;

        while (str[i])
        {
                if (str[i] == '(' || str[i] == '[' || str[i] == '{')
                {
                        open_brackets[j] = str[i];
                        j++;
                }
                if (str[i] == ')' && open_brackets[j - 1] == '(')
                {
                        open_brackets[j - 1] = '\0';
                        j--;
                }else
                if (str[i] == ']' && open_brackets[j - 1] == '[')
                {
                        open_brackets[j - 1] = '\0';
                        j--;
                }else
                if (str[i] == '}' && open_brackets[j - 1] == '{')
                {
                        open_brackets[j - 1] = '\0';
                        j--;
                }else if (str[i] == ')' || str[i] == ']' || str[i] == '}')
                {
                        write (1, "Error\n", 6);
                        return;
                }

                i++;
        }
        if (j == 0)
        {
                write (1, "OK\n", 3);
                return;
        }else
        {
                write (1, "Error\n", 6);
                return;
        }
}

int     main(int ac, char **av)
{
        if (ac < 2)
        {
                write (1, "\n", 1);
                return (0);
        }
        int i;

        i = 1;
        while (av[i])
        {
                brackets (av[i]);
                i++;
        }
        return (0);
}